<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Tweet;

use Auth;
use App\Models\User;
class TweetController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // 🔽 編集
  $tweets = Tweet::getAllOrderByUpdated_at();
  return response()->view('tweet.index',compact('tweets'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    // 🔽 追加
    return response()->view('tweet.create');
  }

  // 以降は変更な
  
  public function store(Request $request)
{
  // バリデーション
  $validator = Validator::make($request->all(), [
    'tweet' => 'required | max:191',
    'description' => 'required',
  ]);
  // バリデーション:エラー
  if ($validator->fails()) {
    return redirect()
      ->route('tweet.create')
      ->withInput()
      ->withErrors($validator);
  }
  // create()は最初から用意されている関数
  // 戻り値は挿入されたレコードの情報
  $result = Tweet::create($request->all());
  
  $data = $request->merge(['user_id' => Auth::user()->id])->all();
  $result = Tweet::create($data);
  
  // ルーティング「tweet.index」にリクエスト送信（一覧ページに移動）
  return redirect()->route('tweet.index');
}

public function show($id)
{
  $tweet = Tweet::find($id);
  return response()->view('tweet.show', compact('tweet'));
}

public function destroy($id)
{
  $result = Tweet::find($id)->delete();
  return redirect()->route('tweet.index');
}

public function edit($id)
{
  $tweet = Tweet::find($id);
  return view('tweet.edit', compact('tweet'));
}

public function update(Request $request, $id)
{
  //バリデーション
  $validator = Validator::make($request->all(), [
    'tweet' => 'required | max:191',
    'description' => 'required',
  ]);
  //バリデーション:エラー
  if ($validator->fails()) {
    return redirect()
      ->route('tweet.edit', $id)
      ->withInput()
      ->withErrors($validator);
  }
  //データ更新処理
  $result = Tweet::find($id)->update($request->all());
  return redirect()->route('tweet.index');
}

public function mydata()
  {
    // Userモデルに定義したリレーションを使用してデータを取得する．
    $tweets = User::query()
      ->find(Auth::user()->id)
      ->userTweets()
      ->orderBy('created_at','desc')
      ->get();
    return response()->view('tweet.index', compact('tweets'));
  }

}
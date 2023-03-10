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
    // ð½ ç·¨é
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
    // ð½ è¿½å 
    return response()->view('tweet.create');
  }

  // ä»¥éã¯å¤æ´ãª
  
  public function store(Request $request)
{
  // ããªãã¼ã·ã§ã³
  $validator = Validator::make($request->all(), [
    'tweet' => 'required | max:191',
    'description' => 'required',
  ]);
  // ããªãã¼ã·ã§ã³:ã¨ã©ã¼
  if ($validator->fails()) {
    return redirect()
      ->route('tweet.create')
      ->withInput()
      ->withErrors($validator);
  }
  // create()ã¯æåããç¨æããã¦ããé¢æ°
  // æ»ãå¤ã¯æ¿å¥ãããã¬ã³ã¼ãã®æå ±
  $result = Tweet::create($request->all());
  
  $data = $request->merge(['user_id' => Auth::user()->id])->all();
  $result = Tweet::create($data);
  
  // ã«ã¼ãã£ã³ã°ãtweet.indexãã«ãªã¯ã¨ã¹ãéä¿¡ï¼ä¸è¦§ãã¼ã¸ã«ç§»åï¼
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
  //ããªãã¼ã·ã§ã³
  $validator = Validator::make($request->all(), [
    'tweet' => 'required | max:191',
    'description' => 'required',
  ]);
  //ããªãã¼ã·ã§ã³:ã¨ã©ã¼
  if ($validator->fails()) {
    return redirect()
      ->route('tweet.edit', $id)
      ->withInput()
      ->withErrors($validator);
  }
  //ãã¼ã¿æ´æ°å¦ç
  $result = Tweet::find($id)->update($request->all());
  return redirect()->route('tweet.index');
}

public function mydata()
  {
    // Userã¢ãã«ã«å®ç¾©ãããªã¬ã¼ã·ã§ã³ãä½¿ç¨ãã¦ãã¼ã¿ãåå¾ããï¼
    $tweets = User::query()
      ->find(Auth::user()->id)
      ->userTweets()
      ->orderBy('created_at','desc')
      ->get();
    return response()->view('tweet.index', compact('tweets'));
  }

}
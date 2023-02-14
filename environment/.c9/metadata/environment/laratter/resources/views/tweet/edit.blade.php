{"filter":false,"title":"edit.blade.php","tooltip":"/laratter/resources/views/tweet/edit.blade.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":44,"column":0},"action":"insert","lines":["<!-- resources/views/tweet/edit.blade.php -->","","<x-app-layout>","  <x-slot name=\"header\">","    <h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","      {{ __('Edit Tweet') }}","    </h2>","  </x-slot>","","  <div class=\"py-12\">","    <div class=\"max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12\">","      <div class=\"bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg\">","        <div class=\"p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 \">","          @include('common.errors')","          <form class=\"mb-6\" action=\"{{ route('tweet.update',$tweet->id) }}\" method=\"POST\">","            @method('put')","            @csrf","            <div class=\"flex flex-col mb-4\">","              <x-input-label for=\"tweet\" :value=\"__('Tweet')\" />","              <x-text-input id=\"tweet\" class=\"block mt-1 w-full\" type=\"text\" name=\"tweet\" value=\"{{$tweet->tweet}}\" required autofocus />","              <x-input-error :messages=\"$errors->get('tweet')\" class=\"mt-2\" />","            </div>","            <div class=\"flex flex-col mb-4\">","              <x-input-label for=\"description\" :value=\"__('Description')\" />","              <x-text-input id=\"description\" class=\"block mt-1 w-full\" type=\"text\" name=\"description\" value=\"{{$tweet->description}}\" autofocus />","              <x-input-error :messages=\"$errors->get('description')\" class=\"mt-2\" />","            </div>","            <div class=\"flex items-center justify-end mt-4\">","              <a href=\"{{ url()->previous() }}\">","                <x-secondary-button class=\"ml-3\">","                  {{ __('Back') }}","                </x-primary-button>","              </a>","              <x-primary-button class=\"ml-3\">","                {{ __('Update') }}","              </x-primary-button>","            </div>","          </form>","        </div>","      </div>","    </div>","  </div>","</x-app-layout>","",""],"id":1}],[{"start":{"row":0,"column":44},"end":{"row":0,"column":45},"action":"remove","lines":[">"],"id":2},{"start":{"row":0,"column":43},"end":{"row":0,"column":44},"action":"remove","lines":["-"]},{"start":{"row":0,"column":42},"end":{"row":0,"column":43},"action":"remove","lines":["-"]},{"start":{"row":0,"column":41},"end":{"row":0,"column":42},"action":"remove","lines":[" "]},{"start":{"row":0,"column":40},"end":{"row":0,"column":41},"action":"remove","lines":["p"]},{"start":{"row":0,"column":39},"end":{"row":0,"column":40},"action":"remove","lines":["h"]},{"start":{"row":0,"column":38},"end":{"row":0,"column":39},"action":"remove","lines":["p"]},{"start":{"row":0,"column":37},"end":{"row":0,"column":38},"action":"remove","lines":["."]},{"start":{"row":0,"column":36},"end":{"row":0,"column":37},"action":"remove","lines":["e"]},{"start":{"row":0,"column":35},"end":{"row":0,"column":36},"action":"remove","lines":["d"]},{"start":{"row":0,"column":34},"end":{"row":0,"column":35},"action":"remove","lines":["a"]},{"start":{"row":0,"column":33},"end":{"row":0,"column":34},"action":"remove","lines":["l"]},{"start":{"row":0,"column":32},"end":{"row":0,"column":33},"action":"remove","lines":["b"]},{"start":{"row":0,"column":31},"end":{"row":0,"column":32},"action":"remove","lines":["."]},{"start":{"row":0,"column":30},"end":{"row":0,"column":31},"action":"remove","lines":["t"]},{"start":{"row":0,"column":29},"end":{"row":0,"column":30},"action":"remove","lines":["i"]},{"start":{"row":0,"column":28},"end":{"row":0,"column":29},"action":"remove","lines":["d"]},{"start":{"row":0,"column":27},"end":{"row":0,"column":28},"action":"remove","lines":["e"]},{"start":{"row":0,"column":26},"end":{"row":0,"column":27},"action":"remove","lines":["/"]}],[{"start":{"row":0,"column":25},"end":{"row":0,"column":26},"action":"remove","lines":["t"],"id":3},{"start":{"row":0,"column":24},"end":{"row":0,"column":25},"action":"remove","lines":["e"]},{"start":{"row":0,"column":23},"end":{"row":0,"column":24},"action":"remove","lines":["e"]},{"start":{"row":0,"column":22},"end":{"row":0,"column":23},"action":"remove","lines":["w"]},{"start":{"row":0,"column":21},"end":{"row":0,"column":22},"action":"remove","lines":["t"]},{"start":{"row":0,"column":20},"end":{"row":0,"column":21},"action":"remove","lines":["/"]},{"start":{"row":0,"column":19},"end":{"row":0,"column":20},"action":"remove","lines":["s"]},{"start":{"row":0,"column":18},"end":{"row":0,"column":19},"action":"remove","lines":["w"]},{"start":{"row":0,"column":17},"end":{"row":0,"column":18},"action":"remove","lines":["e"]},{"start":{"row":0,"column":16},"end":{"row":0,"column":17},"action":"remove","lines":["i"]},{"start":{"row":0,"column":15},"end":{"row":0,"column":16},"action":"remove","lines":["v"]},{"start":{"row":0,"column":14},"end":{"row":0,"column":15},"action":"remove","lines":["/"]},{"start":{"row":0,"column":13},"end":{"row":0,"column":14},"action":"remove","lines":["s"]},{"start":{"row":0,"column":12},"end":{"row":0,"column":13},"action":"remove","lines":["e"]},{"start":{"row":0,"column":11},"end":{"row":0,"column":12},"action":"remove","lines":["c"]},{"start":{"row":0,"column":10},"end":{"row":0,"column":11},"action":"remove","lines":["r"]},{"start":{"row":0,"column":9},"end":{"row":0,"column":10},"action":"remove","lines":["u"]},{"start":{"row":0,"column":8},"end":{"row":0,"column":9},"action":"remove","lines":["o"]},{"start":{"row":0,"column":7},"end":{"row":0,"column":8},"action":"remove","lines":["s"]},{"start":{"row":0,"column":6},"end":{"row":0,"column":7},"action":"remove","lines":["e"]},{"start":{"row":0,"column":5},"end":{"row":0,"column":6},"action":"remove","lines":["r"]},{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"remove","lines":[" "]},{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"remove","lines":["-"]},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"remove","lines":["-"]}],[{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"remove","lines":["!"],"id":4},{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":["<"]},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"remove","lines":["",""]},{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1676098673512,"hash":"e7bc53a3b00d3cc70feb0f6f3c6a51bd10d5efa4"}
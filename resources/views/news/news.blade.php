@extends('templates.navbar')
@section('body')
{{-- @dd($posts) --}}
<link rel="stylesheet" href="css/news.css">
<div>
  <p class="almonnews">ππ΅πΆπΈπ· π£πͺπ»π½</p>
  <p class="almonnews1">ππ΅πΆπΈπ· π£πͺπ»π½</p>
  <img class="img_news" src="img/news.png">
</div>

<div class="bob_news1">
  <div class="bob_news">
        <p class="text_news">NEWS bakery</p>
        <div class="searchBar">
        <form role ="search" method="GET" class="search-form" action="">
            <label>
                <span class="screenSearchText">Search For:</span>
                <input type="text" id="fname" name="fname" placeholder="Search...">
            </label>
                <input type="submit" name="" id="" class="search-submit">
        </form>
    </div>
    {{-- @foreach ( $posts as $post) --}}
    
    <div class="news_flex">         
      <div class="news_satu">
     <div class="teh_kotak">
       <a class="href"href="/bobnews">
        {{-- <p class="texxt_new_bob">{{ $posts->excerpt  }}</p> --}}
      </a>
    </div>
        <p class="text_new"> anim ad proident ullamco aute cupidatat duis voluptate elit sunt. Nulla enim culpa ullamco proident dolor velit pariatur irure ad in laboris reprehenderit nulla. Nisi aliquip exercitation amet Lorem officia sint magna do incididunt nulla ad aliquip ipsum. Aliqua tempor amet dolore aliquip anim fugiat quis do aliqua culpa.</p>
          </div>
          <img class="news_dua" src="img/news1.png">
        </div>     
    {{-- @endforeach       --}}
        
  <div class="bob5">   </div>
      
    <div class="news_flex">         
      <img class="bobnews_satu" src="img/news2.png">
      <div class="bobnews_dua">
        <div class="teh_kotak">
          <a class="href"href="/bobnews">
           <p class="texxt_new_bob">π·ππ·</p>
         </a>
       </div>
        <p class="text_new"> anim ad proident ullamco aute cupidatat duis voluptate elit sunt. Nulla enim culpa ullamco proident dolor velit pariatur irure ad in laboris reprehenderit nulla. Nisi aliquip exercitation amet Lorem officia sint magna do incididunt nulla ad aliquip ipsum. Aliqua tempor amet dolore aliquip anim fugiat quis do aliqua culpa.</p>
      </div>         
    </div>     
        
        
  
    <div class="bob5">   </div>

    <div class="news_flex">         
      <div class="news_satu">
        <div class="teh_kotak">
          <a class="href"href="/bobnews">
           <p class="texxt_new_bob">π·ππ·</p>
         </a>
       </div>
        <p class="text_new"> anim ad proident ullamco aute cupidatat duis voluptate elit sunt. Nulla enim culpa ullamco proident dolor velit pariatur irure ad in laboris reprehenderit nulla. Nisi aliquip exercitation amet Lorem officia sint magna do incididunt nulla ad aliquip ipsum. Aliqua tempor amet dolore aliquip anim fugiat quis do aliqua culpa.</p>
          </div>
          <img class="news_dua" src="img/new.png">
        </div>     
          
   <div class="bob_5">  
    <div class="container">
      <h2 class="title">
        <span class="title-word title-word-1">π±πͺ </span>
        <span class="title-word title-word-2">π΅π΅ </span>
        <span class="title-word title-word-3">πΈπΈ </span>
        <span class="title-word title-word-4">!Μ΄ </span>
      </h2>
    </div>
  </div>   
    
   <div class="news_flex">         
    <img class="bobnews_satu" src="img/news3.png">
    <div class="bobnews_dua">
      <div class="teh_kotak">
        <a class="href"href="/bobnews">
         <p class="texxt_new_bob">π·ππ·</p>
       </a>
     </div>
      <p class="text_new"> anim ad proident ullamco aute cupidatat duis voluptate elit sunt. Nulla enim culpa ullamco proident dolor velit pariatur irure ad in laboris reprehenderit nulla. Nisi aliquip exercitation amet Lorem officia sint magna do incididunt nulla ad aliquip ipsum. Aliqua tempor amet dolore aliquip anim fugiat quis do aliqua culpa.</p>
    </div>         
  </div>     
   
  <div class="bob5"></div>   
      
  <div class="news_flex">         
    
    <div class="news_satu">
      <div class="teh_kotak">
        <a class="href"href="/bobnews">
         <p class="texxt_new_bob">π·ππ·</p>
       </a>
     </div>
      <p class="text_new"> anim ad proident ullamco aute cupidatat duis voluptate elit sunt. Nulla enim culpa ullamco proident dolor velit pariatur irure ad in laboris reprehenderit nulla. Nisi aliquip exercitation amet Lorem officia sint magna do incididunt nulla ad aliquip ipsum. Aliqua tempor amet dolore aliquip anim fugiat quis do aliqua culpa.</p>
        </div>
        <img class="news_dua" src="img/news4.png">
      </div>   
  <div class="bob5"></div>   
      <div class="news_flex">         
        <img class="bobnews_satu" src="img/news5.png">
        <div class="bobnews_dua">
          <div class="teh_kotak">
            <a class="href"href="/bobnews">
             <p class="texxt_new_bob">π·ππ·</p>
           </a>
         </div>
        <p class="text_new"> anim ad proident ullamco aute cupidatat duis voluptate elit sunt. Nulla enim culpa ullamco proident dolor velit pariatur irure ad in laboris reprehenderit nulla. Nisi aliquip exercitation amet Lorem officia sint magna do incididunt nulla ad aliquip ipsum. Aliqua tempor amet dolore aliquip anim fugiat quis do aliqua culpa.</p>
        </div>         
      </div>     
  <div class="bob5"></div>
      <div class="news_flex">         
        <div class="news_satu">
          <div class="teh_kotak">
            <a class="href"href="/bobnews">
             <p class="texxt_new_bob">π·ππ·</p>
           </a>
         </div>
          <p class="text_new"> anim ad proident ullamco aute cupidatat duis voluptate elit sunt. Nulla enim culpa ullamco proident dolor velit pariatur irure ad in laboris reprehenderit nulla. Nisi aliquip exercitation amet Lorem officia sint magna do incididunt nulla ad aliquip ipsum. Aliqua tempor amet dolore aliquip anim fugiat quis do aliqua culpa.</p>
            </div>
            <img class="news_dua" src="img/news4.png">
          </div> 
    <div class="bob5"></div>      
          <div class="news_flex">         
            <img class="bobnews_satu" src="img/news7.png">
            <div class="bobnews_dua">
              <div class="teh_kotak">
                <a class="href"href="/bobnews">
                 <p class="texxt_new_bob">π·ππ·</p>
               </a>
             </div>
            <p class="text_new"> anim ad proident ullamco aute cupidatat duis voluptate elit sunt. Nulla enim culpa ullamco proident dolor velit pariatur irure ad in laboris reprehenderit nulla. Nisi aliquip exercitation amet Lorem officia sint magna do incididunt nulla ad aliquip ipsum. Aliqua tempor amet dolore aliquip anim fugiat quis do aliqua culpa.</p>
            </div>         
          </div> 
{{-- 
  <div class="burger">
    <div class="bun  ">
    </div>
    <div class="cosmic-fill">
    </div>
    <div class="bottom">
    </div>

  </div>        
         --}}

 </div>
</div>


@endsection



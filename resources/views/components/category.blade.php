<div class="mt-32 mx-24">
    <h3 class="text-4xl font-bold mb-10 {{ request()->is('/') ? 'text-center' : 'text-left'}}">{{ $slot }}</h3>
    <div class="flex justify-between gap-8">

      <x-cardcategory link="/blog/uefa-champions-league" image="img/ucl.png" title="UEFA Champions League" detail="Real Madrid telah memenangkan UEFA Champions League sebanyak 15 kali." />
      <x-cardcategory link="/blog/fifa-club-world-cup" image="img/fcwc.png" title="FIFA Club World Cup" detail="Real Madrid telah memenangkan FIFA Club World Cup sebanyak 5 kali." />
      <x-cardcategory link="/blog/uefa-super-cup" image="img/usc.png" title="UEFA Super Cup" detail="Real Madrid telah memenangkan UEFA Super Cup sebanyak 6 kali." />
      <x-cardcategory link="/blog/laliga" image="img/ll.png" title="LaLiga" detail="Real Madrid telah memenangkan LaLiga sebanyak 36 kali." />
      <x-cardcategory link="/blog/copa-del-rey" image="img/cdr.png" title="Copa del Rey" detail="Real Madrid telah memenangkan Copa del Rey sebanyak 20 kali." />
      
    </div>
  </div>
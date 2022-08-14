<x-app-layout>

</x-app-layout>
<section class="relative py-24 px-4">
    <div class="z-20 relative text-white container mx-auto">
        <h1 class="mb-4" style="color: white; font-family: Impact;font-size: 90px"  >REACH THE SKY.</h1>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <h3 class="leading-normal" style="text-align: right;font-size: 70px; font-family: Impact;color: white">START SKATING TODAY!</h3>


    </div>
    <div class="absolute inset-0 h-auto z-10">
        <img src="/imgs/reachthesky.jpg" alt="" class="h-full w-full object-fit-cover">
    </div>
</section>


<section class="flex min-h-[450px]  flex-col-reverse md:flex-row">
    <div class="flex flex-1 items-center justify-center">
        <article class="max-w-md p-3 py-24 px-3 text-center md:text-left">
            <h1 class="mb-8 text-3xl font-bold leading-8">Engage And Make New Friends!</h1><br>
            <p class="text-xl leading-9 text-black/60 ">First and foremost, joining the skateboarding world can offer a sense of community. As long as you are carrying a skateboard, you can make friends and find belonging almost anywhere in the world.</p>
            <br>
        </article>
    </div>
    <div class="bg-phone min-h-[450px] flex-1 bg-yellow-400 bg-cover bg-center bg-no-repeat"></div>
</section>

<section class="flex min-h-[450px] flex-col-reverse md:flex-row-reverse">
    <div class="flex flex-1 items-center justify-center">
        <article class="max-w-md py-24 px-3 text-center md:text-left">
            <h1 class="mb-8 text-3xl font-bold leading-8">Develop And Show Your Abilities! </h1><br>
            <p class="text-xl leading-9 text-black/60">The basics of skateboarding are not hard to learn but learning tricks can be tricky. A common beginner mistake is learning tricks first and skipping the basics. Skate at least 2 times a week to make progression.</p>
            <br>
        </article>
    </div>
    <div class="bg-glass min-h-[450px] flex-1 bg-yellow-400 bg-center bg-cover bg-no-repeat"></div>
</section>




<section class="m-auto w-10/12 py-36">
    <h1 class="text-3xl text-black/30 font-bold text-center mb-16">Top International Skaters</h1>
    <div class="flex flex-col justify-between md:flex-row gap-12">
        <article class="flex flex-col items-center gap-3 text-center px-2 py-4">
            <div class=" h-24 w-24 overflow-hidden rounded-full outline-dotted outline-4 outline-offset-2 outline-sky-800">
                <img  class="w-full object-cover h-full" src="/imgs/rodneymullen.jpg">
            </div>
            <p class="text-base font-bold text-black/60 mt-9">The biggest obstacle to creativity is breaking through the barrier of disbelief.</p>
            <span class="text-2xl mt-11 font-bold text-black/80">Rodney Mullen</span>
        </article>

        <article class="flex flex-col items-center gap-3 text-center px-2 py-4">
            <div class=" h-24 w-24 overflow-hidden rounded-full outline-dotted outline-4 outline-offset-2 outline-sky-800">
                <img  class="w-full object-cover h-full" src="/imgs/tonyhawk.jpg">
            </div>
            <p class="text-base font-bold text-black/60 mt-9">I believe that people should take pride in what they do.</p>
            <span class="text-2xl mt-11 font-bold text-black/80">Tony Hawk</span>
        </article>
        <article class="flex flex-col items-center gap-3 text-center px-2 py-4">
            <div class=" h-24 w-24 overflow-hidden rounded-full outline-dotted outline-4 outline-offset-2 outline-sky-800">
                <img  class="w-full object-cover h-full" src="/imgs/mark.jpg">
            </div>
            <p class="text-base font-bold text-black/60 mt-9">If you can be not afraid to be laughed at, you could do so many things.</p>

            <span class="text-2xl mt-11 font-bold text-black/80">Mark Gonzales</span>
        </article>

    </div>
</section>

<section class="md:flex  flex-wrap grid grid-cols-2">
    <div class="h-[350px] overflow-hidden md:flex-1 w-full bg-blue-800">
        <img class="w-full h-full object-cover" src="/imgs/mark.jpg">
    </div>
    <div class="h-[350px] overflow-hidden md:flex-1 w-full bg-blue-800">
        <img class="w-full h-full object-cover" src="/imgs/rodneymullen.jpg">
    </div>
    <div class="h-[350px] overflow-hidden md:flex-1 w-full bg-blue-800">
        <img class="w-full h-full object-cover" src="/imgs/tonyhawk.jpg">
    </div>
    <div class="h-[350px] overflow-hidden md:flex-1 w-full bg-blue-800 flex items-center justify-center">
        <a class="mt-3 border-b border-b-8 border-dotted border-b-yellow-400 py-2 text-2xl text-white " href="/skaters">Click To See More Skaters</a>
        <img class="https://images.unsplash.com/photo-1586788224331-947f68671cf1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80">
    </div>


</section>



<footer class=" bg-teal-600 h-[250px] flex flex-col items-center gap-3 p-5 " style="color: gray;background-color: black">
    <span class="text-3xl font-bold text-black/50 " >lebanonskates</span>
    <div class="flex flex-col gap-4 items-center">
        <a href="/" class="text-black/50 font-bold">Home</a>
        <a href="/maps" class="text-black/50 font-bold">Maps</a>
        <a href="/events" class="text-black/50 font-bold">Events</a>
        <a href="/quiz" class="text-black/50 font-bold">Quiz</a>
        <a href="/skaters" class="text-black/50 font-bold">Skaters</a>
    </div>
</footer>

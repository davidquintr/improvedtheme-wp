<?php
    get_header();
?>

 <article class="">

    <?php 
        $or_url_message = get_field('message');
        $or_url_page = get_field('page_url');

        $url_message = explode(';', $or_url_message);
        $url_page = explode(';', $or_url_page);
    ?>

    <ul class="flex bg-[#58595b] py-2 items-center justify-center w-full list-navigation gap-4 relative">
        <li class="absolute left-4 sm:left-[25%]">
            <button id="counter-left" >
                <i class="fa-solid fa-chevron-left"></i>
            </button>
        </li>
        <?php for($i = 0 ; $i < count($url_message) ; $i++): ?>
            <li style="display: none" class="flex gap-1 element-catch">
                <p><?php echo $url_message[$i] ?></p>
                <a class="" href="<?php echo $url_page[$i] ?>">Read More</a>
            </li>
        <?php endfor ; ?>
        <li class="absolute right-4 sm:right-[25%]">
            <button id="counter-right" >
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </li>
    </ul>
    
    
 </article>

 <script>
    
    let elementCatch = document.querySelectorAll(".element-catch")

    let counterNav = 0
    let elementLength = elementCatch.length

    let counterLeft = document.querySelector("#counter-left")
    let counterRight = document.querySelector("#counter-right")

    elementCatch[0].style.display = "flex"
    counterLeft.style.opacity = "0.5"




    counterLeft.addEventListener("click", () =>{
        if(counterNav - 1 < 0) return;
        counterNav--
        changeElementVisibility()
    })

    counterRight.addEventListener("click", () =>{
        console.log(counterNav + 1 > elementLength)
        
        if(counterNav + 1 == elementLength) return;
        counterNav++
        changeElementVisibility()
    })

    function changeElementVisibility() {
    elementCatch.forEach((element, index) => {
        element.style.display = index === counterNav ? "flex" : "none";
    });

    counterLeft.style.opacity = counterNav === 0 ? "0.5" : "1";
    counterRight.style.opacity = counterNav === elementLength - 1 ? "0.5" : "1";
}

 </script>

<?php
    get_footer();
?>
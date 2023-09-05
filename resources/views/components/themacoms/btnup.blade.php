<div>             
     <style>
     .btnpageup {
        display: none; 
        position: fixed;
        bottom: 10px;
        right: 10px;
        z-index: 9999; 
        padding: 6px 9px;
        font-size: 24px;
        color: #ffffff;
        background-color: #15b3a5;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        opacity: 0.7;
        transition: opacity 0.3s;
    }
    
    .btnpageup:hover {
        opacity: 1;
    }
    </style>
     <section>
        <a href="#" class="btnpageup" id="btnPageUp">
             <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
        <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
      </svg>
</a>
</section>
     <script>
     var mybutton = document.getElementById("btnPageUp");
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    mybutton.addEventListener('click', function(event){
        event.preventDefault();
        window.scrollTo({top: 0, behavior: 'smooth'});
    });
    </script>
     <?php  ?>           
     
</div>
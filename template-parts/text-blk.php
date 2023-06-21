
<?php if ( have_posts() ) { 
    while ( have_posts() ) {
        the_post();    
        $content = get_the_content();
        if (!empty($content)) {
?>
            <script>
                document.addEventListener("DOMContentLoaded", () => { 
                    let showBtn = document.getElementById("showTxtBtn") 
                    let textBlk = document.getElementById("textBlkSh") 

                    showBtn.addEventListener("click", function (e) { 
                        e.preventDefault()
                        textBlk.classList.toggle("shoved")

                        if (textBlk.classList.contains("shoved"))
                            showBtn.innerHTML = "Свернуть"
                        else
                            showBtn.innerHTML = "Читать далее"

                    })
                })

            </script>

            <div class="main__textblk">
                <section id="textBlkSh" class="mainText">
                    
                    <?php
                        the_content();
                    ?>
                </section>

                <div class="hide_show_panel">
                    <a id="showTxtBtn" href="#">Читать далее</a>
                </div>
            </div>

<? 
        }
    }
} 
?>
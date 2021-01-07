<?php

$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi alias sit velit nisi quas aut aliquid aspernatur itaque dignissimos, laboriosam, officia earum odit optio eos tenetur porro. Autem, labore repellendus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi alias sit velit nisi quas aut aliquid aspernatur itaque dignissimos, laboriosam, officia earum odit optio eos tenetur porro. Autem, labore repellendusadipisicing elit. Commodi alias sit velit nisi quas aut aliquid aspernatur itaque dignissimos, laboriosam, officia earum odit optio eos tenetur porro. Autem, labore repellendus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi alias sit velit nisi quas aut aliquid aspernatur itaque dignissimos, laboriosam, officia earum odit optio eos tenetur porro. Autem, labore repellendusadipisicing elit. Commodi alias sit velit nisi quas aut aliquid aspernatur itaque dignissimos, laboriosam, officia earum odit optio eos tenetur porro. Autem, labore repellendus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi alias sit velit nisi quas aut aliquid aspernatur itaque dignissimos, laboriosam, officia earum odit optio eos tenetur porro. Autem, labore repellendus";

$paragraph = explode(".", $paragraph);
?>

<ol>
    <?php foreach ($paragraph as $k => $v) {
        echo"<li> ".$v.".</li>";
        } 
        ?>
</ol>
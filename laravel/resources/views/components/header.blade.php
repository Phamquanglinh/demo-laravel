<div>
    <ul>
        <?php
            foreach ($navigateItem as $item){
                if ($item==$active){
                    echo '<li class="normal active">'.$item.'</li>';
                }else{
                    echo '<li class="normal">'.$item.'</li>';
                }
            }

        ?>
    </ul>
</div>
<style>
    ul{
        text-align: center;
        width: 100%;
    }
    .active{
        font-weight: bold;
        color:red!important;
    }
    .active:hover{
        padding: 12px;
        border: 3px solid;
        background: red;
        color: white!important;
        transition: 0.6s;
    }
    .normal{
        display: inline;
        color: blue;
        margin: 12px;
        cursor: pointer;

    }
</style>

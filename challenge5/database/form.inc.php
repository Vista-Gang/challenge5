<?php
    $thispage = $_SERVER["PHP_SELF"];
?>


<html>
    <form action="<?php echo $thispage;?>" method="post">
        <label>Productname</label>
        <input type="text" name="tb_title" placeholder="Your productname" value=""> <br />

        <label>Price</label>
        <input type="text" name="tb_price" placeholder="Price of the product" value=""> <br />
    
        <input type="hidden" name="frmgegevens" value="frmgegevens">

        <label>Description</label>
        <textarea type="text" name="tb_description" placeholder="Small description of the product" value=""></textarea> <br />
        
        <label>Language</label>
        <input type="text" name="tb_language" placeholder="What page should the product be on?" value=""></input> <br />

        <label>Type</label>
        <input type="text" name="tb_type" placeholder="Is it a food or a drink?" value=""></input> <br />

        <input type="submit" name="submit" value="submit">
    </form>
</html>
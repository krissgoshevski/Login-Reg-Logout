<?php 
namespace MyExceptions;

class ExchooseProduct extends \Exception
{
    protected $message = "<p class='myExceptions'>
    First, please choose product from type switch, after that you can populate all inputs!</p>";
}

class ExrequiredData extends \Exception
{
    protected $message = "<p class='myExceptions'>Please, submit required data! </p>";
}

class ExuniqueSku extends \Exception
{
    protected $message = "<p class='myExceptions'>SKU already exists in the database, that must be unique value! </p>";
  
}


class ExrequiredSku extends \Exception
{
   protected $message = "<p class='myExceptions'>SKU must have nine characters!</p>";
}

class Exinvalidsku extends \Exception
{
    protected $message = "<p class='myExceptions'>Sku after 'dash'(-) only support numbers, you had inserted text!</p>";
}


class ExrequiredName extends \Exception
{
    protected $message = "<p class='myExceptions'>Name must have at least 6 chars!</p>";
}


class Exinvalidprice extends \Exception
{
    protected $message = "<p class='myExceptions'>Price input only support numbers!</p>";
}

class Exinvalidname extends \Exception
{
    protected $message = "<p class='myExceptions'>Name input only support text!</p>";
}


class ExinvalidSize extends \Exception
{
    protected $message = "<p class='myExceptions'>Input Size (MB) only support whole positive number from 0 to 9, you have inserted text or negative number! </p>";
}


class ExinvalidFurnitureInputs extends \Exception
{
    protected $message = "<p class='myExceptions'>All inputs for Furniture support whole numbers and decimal numbers</p>";
}

class ExinvalidWeight extends \Exception
{
    protected $message = "<p class='myExceptions'>Input Weight (KG) only support whole numbers and three decimal numbers after 'dot' for KG, you have inserted text or more than three decimal numbers! </p>";
}



class ExInvalidPrefixCd extends \Exception
{
    protected $message = "<p class='myExceptions'>Invalid prefix for CD, must begins with CD-</p>";
}



class ExInvalidPrefixFur extends \Exception
{
    protected $message = "<p class='myExceptions'>Invalid prefix for Fur, must begins with FU-</p>";
}



class ExInvalidPrefixBook extends \Exception
{
    protected $message = "<p class='myExceptions'>Invalid prefix for Book, must begins with BO-</p>";
}
?>



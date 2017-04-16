<?php
for ($num=1;$num<=6;$num++)
{
   if (($num % 3) == 0)
   {
      echo "<b>".$num."</b>&nbsp;делится на 3<br/>";
   }
   else
   {
      echo "<b>".$num."</b>&nbsp;не делится на 3<br/>";
   }
}
?>
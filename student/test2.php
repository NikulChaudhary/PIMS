<html>
<head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" ></script>

    <script type="text/javascript">

        $(document).ready(function() {  

            $('#num_cat').change(function(){


                var num = $('#num_cat').val();                  

                var i = 0;
                var html = '';  

                for (i=1;i<=num;i++) {
                html += 'Category ' + i + ': <select name="cat[]">\n\
               <option value="1"> 1</option>\n\
               <option value="2"> 2</option >\n\
               <option value="3"> 3</option>\n\
               <option value="4"> 4</option>\n\
               <option value="5"> 5</option>\n\
               <option value="6"> 6</option>\n\
               <option value="7"> 7</option>\n\
               <option value="8"> 8</option>\n\
               <option value="9"> 9</option>\n\
               <option value="10"> 10</option>\n\
        </select><br/>'; 
                }

                $('#catList').html(html);
            });
        }); 
    </script>
</head>
<body>
    <form method="post" action="index.php" onchange="addField(this.value)">
        Number of fields required:      
        <select id="num_cat" name="num_cat">
            <option value="0">- SELECT -</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>

        <div id="catList"></div>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>


<?php
if(isset($_POST['submit'])) 
{
   echo $_POST['cat'];

}

?>
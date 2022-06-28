</body>
    <script type="text/javascript" src="../jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>


    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.tooltipped').tooltip();
        });
    </script>

     <script>
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</html>
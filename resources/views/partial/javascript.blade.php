<script type="text/javascript">

  /*  swal({
        title: "gdgrdggd",
        icon: "success",
        button: "coolio",
        text: "hey",
    });*/

  swal('{{ session('search')}}');

 </script>

 <script type="text/javascript">

     swal({
         icon: "success",
         button: "ok",
         text: "{{ session('email')}}",
     });

  </script>



  <script type="text/javascript">

      swal({
          icon: "success",
          button: "ok",
          text: "{{ session('contact')}}",
      });

   </script>

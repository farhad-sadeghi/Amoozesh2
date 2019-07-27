<script type="text/javascript">
@if(count($errors))
@foreach($errors->all() as $error)
swal({
    title: "",
    icon: "error",
    button: "ok",
    text: "{{$error}}",
});
@endforeach
@endif
</script>

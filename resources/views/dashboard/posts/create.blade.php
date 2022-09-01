@extends('dashboard.main')

@section('container')
    <h2>Create new post</h2>
    <hr>

   <div class="col-lg-8">
     <form action="/dashboard/posts" method="post">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" readonly>
        </div>



        <button type="submit" class="btn btn-primary">Create post</button>


    </form>
   </div>

	{{-- <script>
        function setSlug(slug){
            if(slug.length < 1 ) return false
            let slugged = []
            for(let i = 0; i < slug.length; i++){

                slugged[i] = slug[i]

                if (slug[i] == " "){
                    slugged[i] = "-"
                }
            }
            let finalSlug = ""
            for(let i = 0; i < slugged.length; i++){
                finalSlug += slugged[i]
            }
            console.log(finalSlug)

            // $("input[name=slug]").val(finalSlug)
        }

        $(document).on('keyup', "input[name=title]", function(e){
            e.preventDefault()
            if(e.keyCode != 32 && e.keyCode < 65 || e.keyCode > 90){
                return false
            }
            console.log(e.keyCode)
            console.log("valid")

            // let slug = $(this).val()

            // setSlug(slug)
        })

	</script> --}}
@endsection

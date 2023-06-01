<main>
<style>
    .box_middle {
        /* margin-left: auto;
        margin-right: auto;
        margin-top: 0vh;
        margin-bottom: 0vh;
        width: 50vw;
        padding: 0px;
        height: 20px;
        border: solid 3px #03b670;
        border-radius: 5px; */
        
        width: 100px;
        height: 50px;
    }
    .selection_text {
        /* padding: 3%;
        padding-left: 10%; */
        font-size: 20px;
    }
    .selection_image {
        width: 5vw;
        height: 5vw;
    }
    
    .overflow_middle {
        display: flex;
        height: 10vh;
    }
    

</style>

@foreach($demo_material_types as $demo_material_type)
    <div class="box_middle">
        <div onclick="window.location.href='/demo-material-types/{demo_material_type_id}/demo-materials';" class="overflow_middle">
            <img class="selection_image" src="../images/PDF.png"></img>
            <p class="selection_text">{{ $demo_material_type->filename_extension }}</p>
        </div>
    </div>
 @endforeach
</main>
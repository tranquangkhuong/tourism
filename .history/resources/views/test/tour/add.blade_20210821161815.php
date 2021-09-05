<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery.min.js') }}"></script>
    @routes
</head>

<body>
    <form action="{{ route('admin.tour.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name" required>
        <input type="text" name="code" placeholder="code" readonly required>
        <button type="button" id="btn-generate-code">Generate</button>
        <select name="tag_id[]" id="" class="select2" data-placeholder="Chon tag" multiple required>
            @foreach ($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
        <select name="vehicle_id[]" id="" class="select2" data-placeholder="Chon vehicle" multiple required>
            @foreach ($vehicles as $vehicle)
            <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
            @endforeach
        </select>
        <select name="area_id" id="">
            @foreach ($areas as $area)
            <option value="{{ $area->id }}">{{ $area->name }}</option>
            @endforeach
        </select>
        <select name="location_id" id="">
            @foreach ($locations as $location)
            <option value="{{ $location->id }}">{{ $location->name }}</option>
            @endforeach
        </select>
        <select name="promotion_id" id="">
            @foreach ($promotions as $promotion)
            <option value="{{ $promotion->id }}">{{ $promotion->name }}</option>
            @endforeach
        </select>
        <textarea name="description" id="" cols="30" rows="10" placeholder="Mo ta"></textarea>
        <input type="text" name="departure_location" placeholder="Departure location">
        <input type="text" name="destination" placeholder="destination">
        <input type="text" name="itinerary" id="" placeholder="Itinerary">
        <input type="number" name="slot" id="" placeholder="slot">
        <input type="number" name="adult_price" step="500" id="" placeholder="adult price">
        <input type="number" name="youth_price" step="500" id="" placeholder="youth price">
        <input type="number" name="child_price" step="500" id="" placeholder="child price">
        <input type="number" name="baby_price" step="500" id="" placeholder="baby price">
        <div class="container1">
            <button class="add_form_field">Add New Field &nbsp;
                <span style="font-size:16px; font-weight:bold;">+ </span>
            </button>
            <div><input type="text" name="include[]"></div>
        </div>
        {{-- <div class="container1">
            <button class="add_form_field">Add New Field &nbsp;
                <span style="font-size:16px; font-weight:bold;">+ </span>
            </button>
            <div><input type="text" name="include[]"></div>
        </div> --}}
        <button type="submit">Save</button>
    </form>
    <a href="{{ route('admin.tour.index') }}">Back Index</a>


    <script src="{{ asset('backend/index.js') }}"></script>
</body>
<script>
    $(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div><input type="text" name="include[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
</script>

</html>

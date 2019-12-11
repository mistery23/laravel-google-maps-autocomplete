<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <input type="text" name="{{$name}}" placeholder="City" class="form-control" value="{{ old('city') }}" id="{{$id}}">
</div>
<script type="text/javascript">
    function initialize_{{$name}}() {
        var options = {
            types: ['{{$types}}'],
        };
        var input1 = document.getElementById('{{$id}}');
        autocomplete = new google.maps.places.Autocomplete(input1, options);
    }

    google.maps.event.addDomListener(window, 'load', initialize_{{$name}});
</script>

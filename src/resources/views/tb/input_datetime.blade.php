<label class="input">
    <input type="text"
           id="{{ $prefix . $name }}"
           value="{{$value}}"
           name="{{$name}}"
           class="form-control datepicker" >

    <span class="input-group-addon form-input-icon">
        <i class="fa fa-calendar"></i>
    </span>
</label>

@if (isset($comment) && $comment)
  <div class="note">
      {{$comment}}
  </div>
@endif
<script>
jQuery(document).ready(function() {
    jQuery("#{{ $prefix . $name }}").datetimepicker({
        changeMonth: true,
        numberOfMonths: {{ $months ? : '1' }},
        prevText: '<i class="fa fa-chevron-left"></i>',
        nextText: '<i class="fa fa-chevron-right"></i>',
        dateFormat: "dd/mm/yy",
        timeFormat: 'HH:mm:ss',
        //showButtonPanel: true,
        regional: ["ru"],
        onClose: function (selectedDate) {}
    });
});
</script>
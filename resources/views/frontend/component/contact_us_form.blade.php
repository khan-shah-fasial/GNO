<!----============ Form start =================-------------------->
<form id="add_contact_us_form" action="{{url(route('contact.create'))}}" method="post" enctype="multipart/form-data">
    @csrf

  

    <input type="hidden" name="section" value="Contact us Form" >
    <input type="hidden" name="url" value="{{ url()->current() }}" >

    <div class="form-group">
        <input id="form_name1" name="name" placeholder="Your Name" class="form-control" type="text"
            required>

    </div>

    <div class="form-group">
        <input id="form_name2" name="email" class="form-control" placeholder="Email Address" type="email"
            placeholder="" required>
    </div>

    <div class="form-group">
        <input type="tel" placeholder="Phone" name="phone" 
        required />
    </div>

    <div class="form-group">
        <textarea id="form_name3" name="description" class="msgbox" placeholder="Message" rows="2"
            cols="93"></textarea>
    </div>

    <input type="hidden" name="ref_url" value="{{ url()->previous() }}"  />

    <div class=" sendbtn text-start">
        <button type="submit">Send Message</button>
    </div>
    
</form>

<!----============ Form End =================-------------------->
@section('component.scripts')
<script>
$(document).ready(function() {
    initValidate('#add_contact_us_form');
    $("#add_contact_us_form").submit(function(e) {
        var form = $(this);
        ajaxSubmit(e, form, responseHandler);
    });

    var responseHandler = function(response) {
        $('input, textarea').val('');
        $("select option:first").prop('selected', true);
        setTimeout(function() {
            window.location.href = $('#baseUrl').attr('href') + '/thank-you';
        }, 2000);
    }
});
</script>
@endsection
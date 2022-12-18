@extends('style')

{{-- for dropdown --}}
<?php
    $case = array(
     "Open" => "Open",
     "Inactive" => "Inactive",
     "Closed" => "Closed",
     "Reopened" => "Reopened"
    )

?>
    {{-- reference https://www.ifad.org/documents/38714170/40224860/philippines_ctn.pdf/ae0faa4a-2b65-4026-8d42-219db776c50d --}}
<?php
      $group = array(
        "" => "",
        "Abelling" => "Abelling",
        "Abiyan" => "Abiyan",
        "Adasen" => "Adasen",
        "Aeta" => "Aeta",
        "Aggay" => "Aggay",
        "Agta" => "Agta",
        "Agutaynon"=> "Agutaynon",
        "Alab"=> "Alab",
        "Alangan Mangyan" => "Alangan Mangyan",
        "Apayao" => "Apayao",
        "Aromanon" => "Aromanon",
        "Ata" => "Ata",
        "Ati" => "Ati",
        "Ayangan" => "Ayangan",
        "Badjao" => "Badjao",
        "Bugkalot" => "Bugkalot",
        "Bago" => "Bago",
        "Bagobo" => "Bagobo",
        "Buhid Mangyan" => "Buhid Mangyan",
        "Balangao" => "Balangao",
        "Balatoc" => "Balatoc",
        "Baluga" => "Baluga",
        "Banao"=> "Banao",
        "Banwaon"=> "Banwaon",
        "Barlig"=> "Barlig",
        "Basao"=> "Basao",
        "Batak" =>  "Batak",
        "Batangan Mangyan" => "Batangan Mangyan",
        "Binongan" => "Binongan",
        "Blaan" => "Blaan",
        "Bontok" => "Bontok",
        "Bukidnon" => "Bukidnon",
        "Butbut" => "Butbut",
        "Cagaluan" => "Cagaluan",
        "Central Bontok" => "Central Bontok",
        "Cimaron" => "Cimaron",
        "Cuyunon" => "Cuyunon",
        "Dacalan" => "Dacalan",
        "Dagayanen" => "Dagayanen",
        "Danak" => "Danak",
        "Dananao" => "Dananao",
        "Dibabawon" => "Dibabawon",
        "Dulangan" => "Dulangan",
        "Dumagat" => "Dumagat",
        "Eastern Bontok" => "Eastern Bontok",
        "Escaya" => "Escaya",
        "Gaddang" => "Gaddang",
        "Gubang" => "Gubang",
        "Gubatnon Mangyan" => "Gubatnon Mangyan",
        "Guilayon" => "Guilayon",
        "Guinaang" => "Guinaang",
        "Hanunuo Mangyan" => "Hanunuo Mangyan",
        "Higaonon" => "Higaonon",
        "Ibaloy" => "Ibaloy",
        "Ibanag" => "Ibanag",
        "Ifugao" => "Ifugao",
        "Iraya Mangyan" => "Iraya Mangyan",
        "Isarog" => "Isarog",
        "Isinai" => "Isinai",
        "Isneg" => "Isneg",
        "Itneg" => "Itneg",
        "Itawis" => "Itawis",
        "Itom" => "Itom",
        "Iranon" => "Iranon",
        "Jama Mapon" => "Jama Mapon",
        "Kabihug" => "Kabihug",
        "Kalagan" => "Kalagan",
        "Kalanguya" => "Kalanguya",
        "Kalibugan" => "Kalibugan",
        "Kalinga" => "Kalinga",
        "Kamigin" => "Kamigin",
        "Kankanaey Ibenguet" => "Kankanaey Ibenguet",
        "Kankanaey Iyaplay" => "Kankanaey Iyaplay",
        "Karao" => "Karao",
        "Karintik" => "Karintik",
        "Kongking" => "Kongking",
        "Korolanos" => "Korolanos",
        "Lambangian" => "Lambangian",
        "Langilan" => "Langilan",
        "Lubo" => "Lubo",
        "Lubuagan" => "Lubuagan",
        "Mabaka" => "Mabaka",
        "Madukayan" => "Madukayan",
        "Maeng" => "Maeng",
        "Magahat" => "Magahat",
        "Maguindanao" => "Maguindanao",
        "Malbong" => "Malbong",
        "Mamanwa" => "Mamanwa",
        "Mandaya" => "Mandaya",
        "Mandek-ey" => "Mandek-ey",
        "Mangali" => "Mangali",
        "Manobo" => "Manobo",
        "Manobo B‟lit" => "Manobo B‟lit",
        "Mansaka" => "Mansaka",
        "Maranao" => "Maranao",
        "Masadiit" => "Masadiit",
        "Matigsalog" => "Matigsalog",
        "Mayudan" => "Mayudan",
        "Molbog" => "Molbog",
        "Naneng" => "Naneng",
        "Negrito" => "Negrito",
        "Northern Kankanaey" => "Northern Kankanaey",
        "Palawanon" => "Palawanon",
        "Pugot" => "Pugot",
        "Pullon" => "Pullon",
        "Ratagnon Mangyan" => "Ratagnon Mangyan",
        "Remontado" => "Remontado",
        "Sadanga" => "Sadanga",
        "Salegseg" => "Salegseg",
        "Sama" => "Sama",
        "Sama Laut" => "Sama Laut",
        "Sangil" => "Sangil",
        "Subanen" => "Subanen",
        "Sulod" => "Sulod",
        "Sumadel" => "Sumadel",
        "T-boli" => "T-boli",
        "Tabangon" => "Tabangon",
        "Tadyawan Mangyan" => "Tadyawan Mangyan",
        "Tagabawa" => "Tagabawa",
        "Tagakaolo" => "Sama",
        "Talaandig" => "Talaandig",
        "Talaingod" => "Talaingod",
        "Taloctok" => "Taloctok",
        "Tao‟t Bato" => "Tao‟t Bato",
        "Tigawahanon" => "Tigawahanon",
        "Tinggian" => "Tinggian",
        "Tinglayan" => "Tinglayan",
        "Tiruray" => "Tiruray",
        "Tonglayan" => "Tonglayan",
        "Tulgao" => "Tulgao",
        "Tuwali" => "Tuwali",
        "Ubo Manobo" => "Ubo Manobo",
        "Umayamnon" => "Umayamnon",
        "Yakan" => "Yakan"
     
    )

?>

@section('content')
{!! Form::open(['id' => 'submit-form', 'url' => route('forms.store'), 'method' => 'POST']) !!}

    <title>form</title>

        <div class="box">

            <hr class="line1">

                <div class="box-form">
                    
                    <button type="button" class="button-top" title="Go to top"><i class="fa fa-angle-up"></i></button>
                    <button type="button" class="button-bottom" title="Go to bottom"><i class="fa fa-angle-down"></i></button>
            
                    <h1>Please Check Applicable:</h1>

                        {{-- questions portion --}}
                        <div class="questions">
                            <b>34. Are you related by consanguinity or affinity to the appointing or recommending authority, or to chief of bureu or office or to the person who has made immediate supervision over you in the Office, 
                                Bureau or Department where you will be appointed,</b><br>
                            
                            <b>{{Form::label('34-a-answer','a. within the third degree?')}}<br></b>
                             {{Form::radio('34-a-answer', 'YES')}}
                             {{Form::label('34-a-answer','YES')}}
                    
                             {{Form::radio('34-a-answer', 'NO')}}
                             {{Form::label('34-a-answer','NO')}}<br>
                    
                            <b>{{Form::label('34-b-answer','b. within the fourth degree (for Local government Unit - Career Employees)?')}}<br></b>
                            {{Form::radio('34-b-answer', 'YES')}}
                            {{Form::label('34-b-answer','YES')}}
                    
                            {{Form::radio('34-b-answer', 'NO')}}
                            {{Form::label('34-b-answer','NO')}}<br>
                            
                            {{Form::label('34-b-answer-details', "If YES, give details: ")}}
                            {{Form::text('34-b-answer-details', null, array('class'=>'form-control', 'id' => '34-b-answer-details', 'disabled','autocomplete' => 'off'))}}
                    
                            <b>{{Form::label('35-a-answer','35. a. Have you ever been found guilty of any administrative offense?')}}<br></b>
                            {{Form::radio('35-a-answer', 'YES')}}
                            {{Form::label('35-a-answer','YES')}}
                    
                            {{Form::radio('35-a-answer', 'NO')}}
                            {{Form::label('35-a-answer','NO')}}<br>
                    
                            {{Form::label('35-a-answer-details', "If YES, give details: ")}}
                            {{Form::text('35-a-answer-details',null, array('class'=>'form-control', 'id' => '35-a-answer-details', 'disabled', 'autocomplete' => 'off'))}}
                    
                            <b>{{Form::label('35-b-answer','b. Have you been criminally change before any court?')}}<br></b>
                            {{Form::radio('35-b-answer', 'YES')}}
                            {{Form::label('35-b-answer','YES')}}
                    
                            {{Form::radio('35-b-answer', 'NO')}}
                            {{Form::label('35-b-answer','NO')}}<br>
                    
                            {{Form::label('35-b-answer-details','If YES, give details: ')}}<br>
                            {{Form::label('35-b-answer-date','Date Field: ')}}
                            {{Form::date('35-b-answer-date', null, array('disabled'))}}<br>
                            {{Form::label('35-b-answer-case', "Status of Case/s: ")}}
                            {{ Form::select('35-b-answer-case', $case, null, ['class' => 'form-control', 'id' => '35-b-answer-case','placeholder' => 'Status', 'disabled']) }} 
                            
                            <b>{{Form::label('36-answer','36. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?')}}<br></b>
                            {{Form::radio('36-answer', 'YES')}}
                            {{Form::label('36-answer','YES')}}
                    
                            {{Form::radio('36-answer', 'NO')}}
                            {{Form::label('36-answer','NO')}}<br>
                    
                            {{Form::label('36-answer-details', "If YES, give details: ")}}
                            {{Form::text('36-answer-details',null, array('class'=>'form-control', 'id' => '36-answer-details', 'disabled', 'autocomplete' => 'off'))}}
                    
                            <b>{{Form::label('37-answer','37. Have you ever been separated from the service in any of the following modes: 
                            resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or 
                            phased out (abolition) in the public or private sector?')}}<br></b>
                            {{Form::radio('37-answer', 'YES')}}
                            {{Form::label('37-answer','YES')}}
                    
                            {{Form::radio('37-answer', 'NO')}}
                            {{Form::label('37-answer','NO')}}<br>
                    
                            {{Form::label('37-answer-details', "If YES, give details: ")}}
                            {{Form::text('37-answer-details',null, array('class'=>'form-control', 'id' => '37-answer-details', 'disabled', 'autocomplete' => 'off'))}}
                    
                            <b>{{Form::label('38-a-answer','38. a. Have you ever been a candidate in a national or local election held within the last year<br>
                            (except Barangay election)?')}}<br></b>
                            {{Form::radio('38-a-answer', 'YES')}}
                            {{Form::label('38-a-answer','YES')}}
                    
                            {{Form::radio('38-a-answer', 'NO')}}
                            {{Form::label('38-a-answer','NO')}}<br>
                    
                            {{Form::label('38-a-answer-details', "If YES, give details: ")}}
                            {{Form::text('38-a-answer-details',null, array('class'=>'form-control', 'id' => '38-a-answer-details', 'disabled', 'autocomplete' => 'off'))}}
                    
                            <b>{{Form::label('38-b-answer','b. Have you resigned from the government service during the three (3)-month period before<br>
                            the last election to promote/actively campaign for a national or local candidate?')}}<br></b>
                            {{Form::radio('38-b-answer', 'YES')}}
                            {{Form::label('38-b-answer','YES')}}
                    
                            {{Form::radio('38-b-answer', 'NO')}}
                            {{Form::label('38-b-answer','NO')}}<br>
                    
                            {{Form::label('38-b-answer-details', "If YES, give details: ")}}
                            {{Form::text('38-b-answer-details',null, array('class'=>'form-control', 'id' => '38-b-answer-details', 'disabled', 'autocomplete' => 'off'))}}
                    
                            <b>{{Form::label('39-answer','39. Have you acquired the status of an immigrant or permanent resident of another country?')}}<br></b>
                            {{Form::radio('39-answer', 'YES')}}
                            {{Form::label('39-answer','YES')}}
                    
                            {{Form::radio('39-answer', 'NO')}}
                            {{Form::label('39-answer','NO')}}<br>
                    
                            {{Form::label('39-answer-details', "If YES, give details: ")}}
                            {{Form::text('39-answer-details',null, array('class'=>'form-control', 'id' => '39-answer-details', 'disabled', 'autocomplete' => 'off'))}}
                    
                            <b>40. Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons 
                                (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items: </b><br>
                    
                            <b>{{Form::label('40-a-answer','a.   Are you a member of any indigenous group?')}}<br></b>
                            {{Form::radio('40-a-answer', 'YES')}}
                            {{Form::label('40-a-answer','YES')}}
                    
                            {{Form::radio('40-a-answer', 'NO')}}
                            {{Form::label('40-a-answer','NO')}}<br>
                    
                            {{Form::label('40-a-answer-details', "If YES, please specify: ")}}
                            {{ Form::select('40-a-answer-details', $group, null, ['class' => 'form-control', 'id' => '40-a-answer-details', 'disabled']) }} 
                    
                            <b>{{Form::label('40-b-answer','b.   Are you a person with disability?')}}<br></b>
                            {{Form::radio('40-b-answer', 'YES')}}
                            {{Form::label('40-b-answer','YES')}}
                    
                            {{Form::radio('40-b-answer', 'NO')}}
                            {{Form::label('40-b-answer','NO')}}<br>
                    
                            {{Form::label('40-b-answer-details', "If YES, please specify ID No: ")}}
                            {{Form::number('40-b-answer-details',null, array('class'=>'form-control', 'id' => '40-b-answer-details', 'disabled'))}}
                    
                            <b>{{Form::label('40-c-answer','c.   Are you a solo parent?')}}<br></b>
                            {{Form::radio('40-c-answer', 'YES')}}
                            {{Form::label('40-c-answer','YES')}}
                    
                            {{Form::radio('40-c-answer', 'NO')}}
                            {{Form::label('40-c-answer','NO')}}<br>
                            
                            {{Form::label('40-c-answer-details', "If YES, please specify ID No: ")}}
                            {{Form::number('40-c-answer-details',null, array('class'=>'form-control', 'id' => '40-c-answer-details', 'disabled'))}}
                                
                            <hr class="line1">

                        </div>

                        {{-- references portion --}}
                        <div class="references">

                            <div class="row">
                                <div class="col-11"><b>41. REFRENCES </b></div>
                                <div class="col-1 row px-0">
                                    <div class="col-5 offset-1 px-0">
                                        <button class="btn btn-secondary btn-sm w-100" id="minus-ref" disabled>-</button>
                                    </div>
                                    <div class="col-5 offset-1 px-0">
                                        <button class="btn btn-secondary btn-sm w-100" id="add-ref">+</button>
                                    </div>
                                </div>
                            </div>
                            <i>(Person not related by consangurity or affinity to applicant/appointee)</i><br>
                            <hr>
                            <b>{{Form::label('41-a-answer-name', "Name: ")}}</b>
                            {{Form::text('41-a-answer-name',null, array('class'=>'form-control', 'id' => '41-a-answer-name','placeholder' => 'Full Name', 'autocomplete' => 'off'))}}
                            <b>{{Form::label('41-a-answer-address', "Address: ")}}</b>
                            {{Form::text('41-a-answer-address',null, array('class'=>'form-control', 'id' => '41-a-answer-address','placeholder' => 'Address', 'autocomplete' => 'off'))}}
                            <b>{{Form::label('41-a-answer-contact-no', "Telephone Number: ")}}</b>
                            {{Form::number('41-a-answer-contact-no',null, array('class'=>'form-control', 'id' => '41-a-answer-contact-no','placeholder' => 'Tel No'))}}<br>
                            
                            {{-- enabled/disabled reference forms --}}
                            <div class="41-b-container d-none">
                                <hr>
                                <b>{{Form::label('41-b-answer-name', "Name: ")}}</b>
                                {{Form::text('41-b-answer-name',null, array('class'=>'form-control', 'id' => '41-b-answer-name','placeholder' => 'Full Name', 'autocomplete' => 'off'))}}
                                <b>{{Form::label('41-b-answer-address', "Address: ")}}</b>
                                {{Form::text('41-b-answer-address',null, array('class'=>'form-control', 'id' => '41-b-answer-address','placeholder' => 'Address', 'autocomplete' => 'off'))}}
                                <b>{{Form::label('41-b-answer-contact-no', "Telephone Number: ")}}</b>
                                {{Form::number('41-b-answer-contact-no',null, array('class'=>'form-control', 'id' => '41-b-answer-contact-no','placeholder' => 'Tel No'))}}<br>
                            </div>
                            <div class="41-c-container d-none">
                                <hr>
                                <b>{{Form::label('41-c-answer-name', "Name: ")}}</b>
                                {{Form::text('41-c-answer-name',null, array('class'=>'form-control', 'id' => '41-c-answer-name','placeholder' => 'Full Name', 'autocomplete' => 'off'))}}
                                <b>{{Form::label('41-c-answer-address', "Address: ")}}</b>
                                {{Form::text('41-c-answer-address',null, array('class'=>'form-control', 'id' => '41-c-answer-address','placeholder' => 'Address', 'autocomplete' => 'off'))}}
                                <b>{{Form::label('41-c-answer-contact-no', "Telephone Number: ")}}</b>
                                {{Form::number('41-c-answer-contact-no',null, array('class'=>'form-control', 'id' => '41-c-answer-contact-no','placeholder' => 'Tel No'))}}<br>
                            </div>

                        </div>
                        
                        <div class="oath">

                            <b><i>42. I declare under oath that I have personally accomplished this Personal Data Sheet which is a 'YES', correct and 
                                complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the 
                                Philippines. I authorize the agency head/authorized representative to verify/validate the contents stated herein. 
                                I  agree that any misrepresentation made in this document and its attachments shall cause the filin'g 
                                                of administrative/criminal case/s against me.</i></b>
                        </div>

                        <div class="id">
                
                        <br><b>Government Issued ID </b><i>(i.e.Passport, GSIS, SSS, PRC, Driver's License, etc.)</i><br>
                        <b>PLEASE INDICATE ID Number</b><br>
                        <b>{{Form::label('42-answer-gov-id', "Government Issued ID: ")}}</b>
                        {{Form::number('42-answer-gov-id',null, array('class'=>'form-control', 'id' => '42-answer-gov-id','placeholder' => 'ID', 'autocomplete' => 'off','maxlength' => 12))}}
                        <b>{{Form::label('42-answer-valid-id-no', "ID/License/Passport No.: ")}}</b>
                        {{Form::number('42-answer-valid-id-no',null, array('class'=>'form-control', 'id' => '42-answer-valid-id-no','placeholder' => 'ID No.', 'autocomplete' => 'off' ,'maxlength' => 12))}}
                        {{Form::label('42-answer-issuance-details-place','Place of Issuance: ')}}
                        {{Form::text('42-answer-issuance-details-place',null, array('class'=>'form-control', 'id' => '42-answer-issuance-details','placeholder' => 'Place of Issuance', 'autocomplete' => 'off'))}}<br> 
                        {{Form::label('42-answer-issuance-details-date','Date of Issuance: ')}}
                        {{Form::date('42-answer-issuance-details-date')}} 
                
                        </div>

                            <div id="bottom" style="text-align: center">
                                <tr><button type="submit" class="btn btn-secondary" >Submit</button></tr>
                            </div>
                            
                        {!! Form::close() !!}
                </div>           
        </div> 

        {{-- sweet alert for submit button --}}
        @if(session()->has('message'))
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="sweetalert/sweetalert.all.js"></script>

        <script>
            swal({
                title: "Success!",
                text: "Successfully Submitted",
                icon: "success",
                button: "Proceed",
            });
        </script>
        @endif

<script>

    // for enabling/disabling reference forms
    $(function() {
    var refCount = 1;
    $('#add-ref').on('click', function (e) {
        e.preventDefault();

        if (refCount === 1) {
            $('.41-b-container').removeClass('d-none');
            $('#minus-ref').attr('disabled', false);
            refCount++;
        } else if (refCount === 2) {
            $('.41-c-container').removeClass('d-none');
            $('#add-ref').attr('disabled', true, required);
            refCount++;
        }
    });

    $('#minus-ref').on('click', function (e) {
        e.preventDefault();

        if (refCount === 2) {
            $('.41-c-container').addClass('d-none');
            $('#add-ref').attr('disabled', false);
            refCount--;
        } else if (refCount === 1) {
            $('.41-b-container').addClass('d-none');
            $('#minus-ref').attr('disabled', true, required);
            refCount--;
        }
    });

    // authenticating answers
    // $('input[name="34-a-answer"]').attr({ 'required': true})
    // $('input[name="34-b-answer"]').attr({ 'required': true})
    // $('input[name="35-a-answer"]').attr({ 'required': true})
    // $('input[name="35-b-answer"]').attr({ 'required': true})
    // $('input[name="36-answer"]').attr({ 'required': true})
    // $('input[name="37-answer"]').attr({ 'required': true})
    // $('input[name="38-a-answer"]').attr({ 'required': true})
    // $('input[name="38-b-answer"]').attr({ 'required': true})
    // $('input[name="39-answer"]').attr({ 'required': true})
    // $('input[name="40-a-answer"]').attr({ 'required': true})
    // $('input[name="40-b-answer"]').attr({ 'required': true})
    // $('input[name="40-c-answer"]').attr({ 'required': true})
    // $('input[name="41-a-answer-name"]').attr({ 'required': true})
    // $('input[name="41-a-answer-address"]').attr({ 'required': true})
    // $('input[name="41-a-answer-contact-no"]').attr({ 'required': true})
    // $('input[name="42-answer-gov-id"]').attr({ 'required': true})
    // $('input[name="42-answer-valid-id-no"]').attr({ 'required': true,})
    // $('input[name="42-answer-issuance-details-date"]').attr({ 'required': true})
    // $('input[name="42-answer-issuance-details-place"]').attr({ 'required': true})

    // enabling/disabling the text boxes for questions portion
    $('input[name="34-b-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="34-b-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="34-b-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="35-a-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="35-a-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="35-a-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="35-b-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="35-b-answer-date"]').attr({
                'disabled': false,
                'required': true
            })
            $('select[name="35-b-answer-case"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="35-b-answer-date"]').attr({
                'disabled': true,
                'required': false
            })
            $('input[name="35-b-answer-case"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="36-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="36-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="36-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="37-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="37-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="37-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="38-a-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="38-a-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="38-a-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="38-b-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="38-b-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="38-b-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="39-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="39-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="39-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="40-a-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('select[name="40-a-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="40-a-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="40-b-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="40-b-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="40-b-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="40-c-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="40-c-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="40-c-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
});

    // for top to bottom button and vice versa
    const body = document.getElementsByTagName('BODY')[0];
    const [buttonTop, buttonBottom] = document.querySelectorAll('button[type=button]');

    const scrollingElement = document.scrollingElement || body;

    const goTop = () => {
        scrollingElement.scrollTop = 0;
    };

    const goBottom = () => {
        scrollingElement.scrollTop = scrollingElement.scrollHeight;
    };

    const onScrollHandler = () => {
        if (scrollingElement.scrollTop > 3300) {
            buttonTop.style.display = 'block';
        } else {
            buttonTop.style.display = 'none';
        }

        if (scrollingElement.scrollTop > scrollingElement.scrollHeight - scrollingElement.clientHeight - 150) {
            buttonBottom.style.display = 'none';
        } else {
            buttonBottom.style.display = 'block';
        }
    }

    buttonTop.addEventListener('click', goTop);
    buttonBottom.addEventListener('click', goBottom);
    window.addEventListener('scroll', onScrollHandler);

    onScrollHandler();

</script>

@endsection
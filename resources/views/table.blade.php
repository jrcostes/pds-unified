@extends('style')


@section('content')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



                    <div class="container mt-5" >

                        <h2>C4 Form List</h2><br>

                        <table class="table" id="Mytable" style="width: 100%">
                            <thead>
                                <tr>
                                    <th scope="col">Surname</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            @foreach ($products as $sheet)
                                            <tr>
                                                <td>{{ $sheet->surname}}</td>

                                                <td>
                                                    {{-- c1form PDF button --}}
                                                    <form id="form1Pdf" method="get" action="/pdf1print" autocomplete="off" onsubmit="return submitForm2(this);">
                                                        <input type="hidden" id="formid" name="formid" value="{{$sheet->id}}">
                                                        <button type="submit" class="btn btn-outline-primary">C1 PDF</button>
                                                    </form>


                                                    {{-- C2 form PDF --}}

                                                    <form id="form2Pdf" method="get" action="/pdf2print" autocomplete="off" onsubmit="return submitForm2(this);">
                                                        <input type="hidden" id="formid" name="formid" value="{{$sheet->id}}">
                                                        <button type="submit" class="btn btn-outline-primary">C2 PDF</button>
                                                    </form>




                                                     <form id="form3Pdf" method="get" action="/pdf3print" autocomplete="off" onsubmit="return submitForm2(this);">
                                                        <input type="hidden" id="formid" name="formid" value="{{$sheet->id}}">
                                                        <button type="submit" class="btn btn-outline-primary">C3 PDF</button>
                                                    </form>


                                                    <button class="btn btn-secondary pdf-id-btn" onclick="pdfAlert('{{$sheet->id}}')">C4 PDF</button>
                                                    <form method="get" action="excel2print" autocomplete="off" onsubmit="return submitForm2(this);">
                                                        <input type="hidden" id="surname" name="surname" value="{{$sheet->surname}}">
                                                        <input type="hidden" id="firstname" name="firstname" value="{{$sheet->firstname}}">
                                                        <input type="hidden" id="firstnameext" name="firstnameext" value="{{$sheet->firstnameext}}">
                                                        <input type="hidden" id="midname" name="midname" value="{{$sheet->midname}}">
                                                        <input type="hidden" id="birthdate" name="birthdate" value="{{$sheet->birthdate}}">
                                                        <input type="hidden" id="sex" name="sex" value="{{$sheet->sex}}">
                                                        <input type="hidden" id="placeofBirth" name="placeofBirth" value="{{$sheet->placeofBirth}}">
                                                        <input type="hidden" id="civilStatus" name="civilStatus" value="{{$sheet->civilStatus}}">
                                                        <input type="hidden" id="civilother" name="civilother" value="{{$sheet->civilOthers}}">
                                                        <input type="hidden" id="height" name="height" value="{{$sheet->height}}">
                                                        <input type="hidden" id="weight" name="weight" value="{{$sheet->weight}}">
                                                        <input type="hidden" id="bloodType" name="bloodType" value="{{$sheet->bloodType}}">


                                                        <input type="hidden" id="gsisno" name="gsisno" value="{{$sheet->gsisno}}">
                                                        <input type="hidden" id="pagibigno" name="pagibigno" value="{{$sheet->pagibigno}}">
                                                        <input type="hidden" id="philhealthno" name="philhealthno" value="{{$sheet->philhealthno}}">
                                                        <input type="hidden" id="sssno" name="sssno" value="{{$sheet->sssno}}">
                                                        <input type="hidden" id="tinnno" name="tinno" value="{{$sheet->tinno}}">
                                                        <input type="hidden" id="agencyemp" name="agencyemp" value="{{$sheet->agencyemp}}">
                                                        <input type="hidden" id="citizens" name="citizens" value="{{$sheet->citizens}}">
                                                        <input type="hidden" id="country" name="country" value="{{$sheet->country}}">
                                                        <input type="hidden" id="dualcitizenType" name="dualcitizenType" value="{{$sheet->dualcitizenType}}">


                                                        <input type="hidden" id="residentialhouse" name="residentialhouse" value="{{$sheet->residentialhouse}}">
                                                        <input type="hidden" id="residentialst" name="residentialst" value="{{$sheet->residentialst}}">
                                                        <input type="hidden" id="residentialsudv" name="residentialsudv" value="{{$sheet->residentialsudv}}">
                                                        <input type="hidden" id="residentialcity" name="residentialcity" value="{{$sheet->residentialcity}}">
                                                        <input type="hidden" id="residentialbrgy" name="residentialbrgy" value="{{$sheet->residentialbrgy}}">
                                                        <input type="hidden" id="residentialprv" name="residentialprv" value="{{$sheet->residentialprv}}">
                                                        <input type="hidden" id="residentialzip" name="residentialzip" value="{{$sheet->residentialzip}}">


                                                        <input type="hidden" id="permanenthouse" name="permanenthouse" value="{{$sheet->permanenthouse}}">
                                                        <input type="hidden" id="permanentst" name="permanentst" value="{{$sheet->permanentst}}">
                                                        <input type="hidden" id="permanentsubdv" name="permanentsubdv" value="{{$sheet->permanentsubdv}}">
                                                        <input type="hidden" id="permanentbrgy" name="permanentbrgy" value="{{$sheet->permanentbrgy}}">
                                                        <input type="hidden" id="permanentcity" name="permanentcity" value="{{$sheet->permanentcity}}">
                                                        <input type="hidden" id="permanentprv" name="permanentprv" value="{{$sheet->permanentprv}}">
                                                        <input type="hidden" id="permanentzip" name="permanentzip" value="{{$sheet->permanentzip}}">


                                                        <input type="hidden" id="telno" name="telno" value="{{$sheet->telno}}">
                                                        <input type="hidden" id="mobno" name="mobno" value="{{$sheet->mobno}}">
                                                        <input type="hidden" id="email" name="email" value="{{$sheet->email}}">


                                                        <input type="hidden" id="spousesn" name="spousesn" value="{{$sheet->spousesn}}">
                                                        <input type="hidden" id="spousefn" name="spousefn" value="{{$sheet->spousefn}}">
                                                        <input type="hidden" id="spousenmext" name="spousenmext" value="{{$sheet->spousenmet}}">
                                                        <input type="hidden" id="spousemn" name="spousemn" value="{{$sheet->spousemn}}">
                                                        <input type="hidden" id="spouseocc" name="spouseocc" value="{{$sheet->spouseocc}}">
                                                        <input type="hidden" id="spouseemp" name="spouseemp" value="{{$sheet->spouseemp}}">
                                                        <input type="hidden" id="spouseempadd" name="spouseempadd" value="{{$sheet->spouseempadd}}">
                                                        <input type="hidden" id="spousetel" name="spousetel" value="{{$sheet->spousetel}}">

                                                        <input type="hidden" id="fathersn" name="fathersn" value="{{$sheet->fathersn}}">
                                                        <input type="hidden" id="fatherfn" name="fatherfn" value="{{$sheet->fatherfn}}">
                                                        <input type="hidden" id="fatherext" name="fatherext" value="{{$sheet->fatherext}}">
                                                        <input type="hidden" id="fathermn" name="fathermn" value="{{$sheet->fathermn}}">

                                                        <input type="hidden" id="mothernm" name="mothernm" value="{{$sheet->mothernn}}">
                                                        <input type="hidden" id="mothersn" name="mothersn" value="{{$sheet->mothersn}}">
                                                        <input type="hidden" id="motherfn" name="motherfn" value="{{$sheet->motherfn}}">
                                                        <input type="hidden" id="mothermn" name="mothermn" value="{{$sheet->mothermn}}">

                                                        <input type="hidden" id="child0" name="child0" value="{{$sheet->child0}}">
                                                        <input type="hidden" id="birthchild0" name="birthchild0" value="{{$sheet->birthchild0}}">
                                                        <input type="hidden" id="child1" name="child1" value="{{$sheet->child1}}">
                                                        <input type="hidden" id="birthchild1" name="birthchild1" value="{{$sheet->birthchild1}}">
                                                        <input type="hidden" id="child2" name="child2" value="{{$sheet->child2}}">
                                                        <input type="hidden" id="birthchild2" name="birthchild2" value="{{$sheet->birthchild2}}">
                                                        <input type="hidden" id="child3" name="child3" value="{{$sheet->child3}}">
                                                        <input type="hidden" id="birthchild3" name="birthchild3" value="{{$sheet->birthchild3}}">
                                                        <input type="hidden" id="child4" name="child4" value="{{$sheet->child4}}">
                                                        <input type="hidden" id="birthchild4" name="birthchild4" value="{{$sheet->birthchild4}}">
                                                        <input type="hidden" id="child5" name="child5" value="{{$sheet->child5}}">
                                                        <input type="hidden" id="birthchild5" name="birthchild5" value="{{$sheet->birthchild5}}">
                                                        <input type="hidden" id="child5" name="child6" value="{{$sheet->child6}}">
                                                        <input type="hidden" id="birthchild5" name="birthchild6" value="{{$sheet->birthchild6}}">
                                                        <input type="hidden" id="child7" name="child7" value="{{$sheet->child7}}">
                                                        <input type="hidden" id="birthchild7" name="birthchild7" value="{{$sheet->birthchild7}}">
                                                        <input type="hidden" id="child8" name="child8" value="{{$sheet->child8}}">
                                                        <input type="hidden" id="birthchild8" name="birthchild8" value="{{$sheet->birthchild8}}">
                                                        <input type="hidden" id="child9" name="child9" value="{{$sheet->child9}}">
                                                        <input type="hidden" id="birthchild9" name="birthchild9" value="{{$sheet->birthchild9}}">
                                                        <input type="hidden" id="child10" name="child10" value="{{$sheet->child10}}">
                                                        <input type="hidden" id="birthchild10" name="birthchild10" value="{{$sheet->birthchild10}}">
                                                        <input type="hidden" id="child11" name="child11" value="{{$sheet->child11}}">
                                                        <input type="hidden" id="birthchild11" name="birthchild11" value="{{$sheet->birthchild11}}">

                                                        <input type="hidden" id="elemname" name="elemname" value="{{$sheet->elemname}}">
                                                        <input type="hidden" id="elemdeg" name="elemdeg" value="{{$sheet->elemdeg}}">
                                                        <input type="hidden" id="attendancefrom" name="attendancefrom" value="{{$sheet->attendancefrom}}">
                                                        <input type="hidden" id="attendanceto" name="attendanceto" value="{{$sheet->attendanceto}}">
                                                        <input type="hidden" id="elemunitLevel" name="elemunitLevel" value="{{$sheet->elemunitLevel}}">
                                                        <input type="hidden" id="yeargradelem" name="yeargradelem" value="{{$sheet->yeargradelem}}">
                                                        <input type="hidden" id="scholarshipelem" name="scholarshipelem" value="{{$sheet->scholarshipelem}}">

                                                        <input type="hidden" id="hsname" name="hsname" value="{{$sheet->hsname}}">
                                                        <input type="hidden" id="hsdeg" name="hsdeg" value="{{$sheet->hsdeg}}">
                                                        <input type="hidden" id="attendancefromhs" name="attendancefromhs" value="{{$sheet->attendancefromhs}}">
                                                        <input type="hidden" id="attendancetohs" name="attendancetohs" value="{{$sheet->attendancetohs}}">
                                                        <input type="hidden" id="hsunitLevel" name="hsunitLevel" value="{{$sheet->hsunitLevel}}">
                                                        <input type="hidden" id="yeargradhs" name="yeargradhs" value="{{$sheet->yeargradhs}}">
                                                        <input type="hidden" id="scholarshiphs" name="scholarshiphs" value="{{$sheet->scholarshiphs}}">

                                                        <input type="hidden" id="vocname" name="vocname" value="{{$sheet->vocname}}">
                                                        <input type="hidden" id="vocdeg" name="vocdeg" value="{{$sheet->vocdeg}}">
                                                        <input type="hidden" id="attendancefromvoc" name="attendancefromvoc" value="{{$sheet->attendancefromvoc}}">
                                                        <input type="hidden" id="attendancetovoc" name="attendancetovoc" value="{{$sheet->attendancetovoc}}">
                                                        <input type="hidden" id="vocunitLevel" name="vocunitLevel" value="{{$sheet->vocunitLevel}}">
                                                        <input type="hidden" id="yeargradvoc" name="yeargradvoc" value="{{$sheet->yeargradvoc}}">
                                                        <input type="hidden" id="scholarshipvoc" name="scholarshipvoc" value="{{$sheet->scholarsipvoc}}">

                                                        <input type="hidden" id="colname" name="colname" value="{{$sheet->colname}}">
                                                        <input type="hidden" id="coldeg" name="coldeg" value="{{$sheet->coldeg}}">
                                                        <input type="hidden" id="attendancefromcol" name="attendancefromcol" value="{{$sheet->attendancefromcol}}">
                                                        <input type="hidden" id="attendancetocol" name="attendancetocol" value="{{$sheet->attendancetocol}}">
                                                        <input type="hidden" id="colunitLevel" name="colunitLevel" value="{{$sheet->colunitLevel}}">
                                                        <input type="hidden" id="yeargradcol" name="yeargradcol" value="{{$sheet->yeargradcol}}">
                                                        <input type="hidden" id="scholarshipcol" name="scholarshipcol" value="{{$sheet->scholarshipcol}}">

                                                        <input type="hidden" id="gradname" name="gradname" value="{{$sheet->gradname}}">
                                                        <input type="hidden" id="graddeg" name="graddeg" value="{{$sheet->graddeg}}">
                                                        <input type="hidden" id="attendancefromgrad" name="attendancefromgrad" value="{{$sheet->attendancefromgrad}}">
                                                        <input type="hidden" id="attendancetograd" name="attendancetograd" value="{{$sheet->attendancetograd}}">
                                                        <input type="hidden" id="gradunitLevel" name="gradunitLevel" value="{{$sheet->gradunitLevel}}">
                                                        <input type="hidden" id="yeargrad" name="yeargrad" value="{{$sheet->yeargrad}}">
                                                        <input type="hidden" id="scholarshipgrad" name="scholarshipgrad" value="{{$sheet->scholarshipgrad}}">


                                                    @foreach ($products3 as $sheet2)
                                                    <input type="hidden" id="orgnameAddress1" name="orgnameAddress1" value="{{$sheet2->orgnameAddress1}}">
                                                    <input type="hidden" id="orgdateFrom1" name="orgdateFrom1" value="{{$sheet2->orgdateFrom1}}">
                                                    <input type="hidden" id="orgdateTo1" name="orgdateTo1" value="{{$sheet2->orgdateTo1}}">
                                                    <input type="hidden" id="orgnumHours1" name="orgnumHours1" value="{{$sheet2->orgnumHours1}}">
                                                    <input type="hidden" id="orgPosition1" name="orgPosition1" value="{{$sheet2->orgPosition1}}">
                                                    <input type="hidden" id="orgnameAddress2" name="orgnameAddress2" value="{{$sheet2->orgnameAddress2}}">
                                                    <input type="hidden" id="orgdateFrom2" name="orgdateFrom2" value="{{$sheet2->orgdateFrom2}}">
                                                    <input type="hidden" id="orgdateTo2" name="orgdateTo2" value="{{$sheet2->orgdateTo2}}">
                                                    <input type="hidden" id="orgnumHours2" name="orgnumHours2" value="{{$sheet2->orgnumHours2}}">
                                                    <input type="hidden" id="orgPosition2" name="orgPosition2" value="{{$sheet2->orgPosition2}}">
                                                    <input type="hidden" id="orgnameAddress3" name="orgnameAddress3" value="{{$sheet2->orgnameAddress3}}">
                                                    <input type="hidden" id="orgdateFrom3" name="orgdateFrom3" value="{{$sheet2->orgdateFrom3}}">
                                                    <input type="hidden" id="orgdateTo3" name="orgdateTo3" value="{{$sheet2->orgdateTo3}}">
                                                    <input type="hidden" id="orgnumHours3" name="orgnumHours3" value="{{$sheet2->orgnumHours3}}">
                                                    <input type="hidden" id="orgPosition3" name="orgPosition3" value="{{$sheet2->orgPosition3}}">
                                                    <input type="hidden" id="orgnameAddress4" name="orgnameAddress4" value="{{$sheet2->orgnameAddress4}}">
                                                    <input type="hidden" id="orgdateFrom4" name="orgdateFrom4" value="{{$sheet2->orgdateFrom4}}">
                                                    <input type="hidden" id="orgdateTo4" name="orgdateTo4" value="{{$sheet2->orgdateTo4}}">
                                                    <input type="hidden" id="orgnumHours4" name="orgnumHours4" value="{{$sheet2->orgnumHours4}}">
                                                    <input type="hidden" id="orgPosition4" name="orgPosition4" value="{{$sheet2->orgPosition4}}">
                                                    <input type="hidden" id="orgnameAddress5" name="orgnameAddress5" value="{{$sheet2->orgnameAddress5}}">
                                                    <input type="hidden" id="orgdateFrom5" name="orgdateFrom5" value="{{$sheet2->orgdateFrom5}}">
                                                    <input type="hidden" id="orgdateTo5" name="orgdateTo5" value="{{$sheet2->orgdateTo5}}">
                                                    <input type="hidden" id="orgnumHours5" name="orgnumHours5" value="{{$sheet2->orgnumHours5}}">
                                                    <input type="hidden" id="orgPosition5" name="orgPosition5" value="{{$sheet2->orgPosition5}}">
                                                    <input type="hidden" id="orgnameAddress6" name="orgnameAddress6" value="{{$sheet2->orgnameAddress6}}">
                                                    <input type="hidden" id="orgdateFrom6" name="orgdateFrom6" value="{{$sheet2->orgdateFrom6}}">
                                                    <input type="hidden" id="orgdateTo6" name="orgdateTo6" value="{{$sheet2->orgdateTo6}}">
                                                    <input type="hidden" id="orgnumHours6" name="orgnumHours6" value="{{$sheet2->orgnumHours6}}">
                                                    <input type="hidden" id="orgPosition6" name="orgPosition6" value="{{$sheet2->orgPosition6}}">
                                                    <input type="hidden" id="orgnameAddress7" name="orgnameAddress7" value="{{$sheet2->orgnameAddress7}}">
                                                    <input type="hidden" id="orgdateFrom7" name="orgdateFrom7" value="{{$sheet2->orgdateFrom7}}">
                                                    <input type="hidden" id="orgdateTo7" name="orgdateTo7" value="{{$sheet2->orgdateTo7}}">
                                                    <input type="hidden" id="orgnumHours7" name="orgnumHours7" value="{{$sheet2->orgnumHours7}}">
                                                    <input type="hidden" id="orgPosition7" name="orgPosition7" value="{{$sheet2->orgPosition7}}">

                                                    <input type="hidden" id="orgnameAddress8" name="orgnameAddress8" value="{{$sheet2->orgnameAddress8}}">
                                                    <input type="hidden" id="orgdateFrom8" name="orgdateFrom8" value="{{$sheet2->orgdateFrom8}}">
                                                    <input type="hidden" id="orgdateTo8" name="orgdateTo8" value="{{$sheet2->orgdateTo8}}">
                                                    <input type="hidden" id="orgnumHours8" name="orgnumHours8" value="{{$sheet2->orgnumHours8}}">
                                                    <input type="hidden" id="orgType8" name="orgType8" value="{{$sheet2->orgType8}}">
                                                    <input type="hidden" id="orgnameSponsor8" name="orgnameSponsor8" value="{{$sheet2->orgnameSponsor8}}">
                                                    <input type="hidden" id="orgnameAddress9" name="orgnameAddress9" value="{{$sheet2->orgnameAddress9}}">
                                                    <input type="hidden" id="orgdateFrom9" name="orgdateFrom9" value="{{$sheet2->orgdateFrom9}}">
                                                    <input type="hidden" id="orgdateTo9" name="orgdateTo9" value="{{$sheet2->orgdateTo9}}">
                                                    <input type="hidden" id="orgnumHours9" name="orgnumHours9" value="{{$sheet2->orgnumHours9}}">
                                                    <input type="hidden" id="orgType9" name="orgType9" value="{{$sheet2->orgType9}}">
                                                    <input type="hidden" id="orgnameSponsor9" name="orgnameSponsor9" value="{{$sheet2->orgnameSponsor9}}">
                                                    <input type="hidden" id="orgnameAddress10" name="orgnameAddress10" value="{{$sheet2->orgnameAddress10}}">
                                                    <input type="hidden" id="orgdateFrom10" name="orgdateFrom10" value="{{$sheet2->orgdateFrom10}}">
                                                    <input type="hidden" id="orgdateTo10" name="orgdateTo10" value="{{$sheet2->orgdateTo10}}">
                                                    <input type="hidden" id="orgnumHours10" name="orgnumHours10" value="{{$sheet2->orgnumHours10}}">
                                                    <input type="hidden" id="orgType10" name="orgType10" value="{{$sheet2->orgType10}}">
                                                    <input type="hidden" id="orgnameSponsor10" name="orgnameSponsor10" value="{{$sheet2->orgnameSponsor10}}">
                                                    <input type="hidden" id="orgnameAddress11" name="orgnameAddress11" value="{{$sheet2->orgnameAddress11}}">
                                                    <input type="hidden" id="orgdateFrom11" name="orgdateFrom11" value="{{$sheet2->orgdateFrom11}}">
                                                    <input type="hidden" id="orgdateTo11" name="orgdateTo11" value="{{$sheet2->orgdateTo11}}">
                                                    <input type="hidden" id="orgnumHours11" name="orgnumHours11" value="{{$sheet2->orgnumHours11}}">
                                                    <input type="hidden" id="orgType11" name="orgType11" value="{{$sheet2->orgType11}}">
                                                    <input type="hidden" id="orgnameSponsor11" name="orgnameSponsor11" value="{{$sheet2->orgnameSponsor11}}">
                                                    <input type="hidden" id="orgnameAddress12" name="orgnameAddress12" value="{{$sheet2->orgnameAddress12}}">
                                                    <input type="hidden" id="orgdateFrom12" name="orgdateFrom12" value="{{$sheet2->orgdateFrom12}}">
                                                    <input type="hidden" id="orgdateTo12" name="orgdateTo12" value="{{$sheet2->orgdateTo12}}">
                                                    <input type="hidden" id="orgnumHours12" name="orgnumHours12" value="{{$sheet2->orgnumHours12}}">
                                                    <input type="hidden" id="orgType12" name="orgType12" value="{{$sheet2->orgType12}}">
                                                    <input type="hidden" id="orgnameSponsor12" name="orgnameSponsor12" value="{{$sheet2->orgnameSponsor12}}">
                                                    <input type="hidden" id="orgnameAddress13" name="orgnameAddress13" value="{{$sheet2->orgnameAddress13}}">
                                                    <input type="hidden" id="orgdateFrom13" name="orgdateFrom13" value="{{$sheet2->orgdateFrom13}}">
                                                    <input type="hidden" id="orgdateTo13" name="orgdateTo13" value="{{$sheet2->orgdateTo13}}">
                                                    <input type="hidden" id="orgnumHours13" name="orgnumHours13" value="{{$sheet2->orgnumHours13}}">
                                                    <input type="hidden" id="orgType13" name="orgType13" value="{{$sheet2->orgType13}}">
                                                    <input type="hidden" id="orgnameSponsor13" name="orgnameSponsor13" value="{{$sheet2->orgnameSponsor13}}">
                                                    <input type="hidden" id="orgnameAddress14" name="orgnameAddress14" value="{{$sheet2->orgnameAddress14}}">
                                                    <input type="hidden" id="orgdateFrom14" name="orgdateFrom14" value="{{$sheet2->orgdateFrom14}}">
                                                    <input type="hidden" id="orgdateTo14" name="orgdateTo14" value="{{$sheet2->orgdateTo14}}">
                                                    <input type="hidden" id="orgnumHours14" name="orgnumHours14" value="{{$sheet2->orgnumHours14}}">
                                                    <input type="hidden" id="orgType14" name="orgType14" value="{{$sheet2->orgType14}}">
                                                    <input type="hidden" id="orgnameSponsor14" name="orgnameSponsor14" value="{{$sheet2->orgnameSponsor14}}">

                                                    <input type="hidden" id="orgnameSkill1" name="orgnameSkill1" value="{{$sheet2->orgnameSkill1}}">
                                                    <input type="hidden" id="orgnameDistinct1" name="orgnameDistinct1" value="{{$sheet2->orgnameDistinct1}}">
                                                    <input type="hidden" id="orgnameMembership1" name="orgnameMembership1" value="{{$sheet2->orgnameMembership1}}">
                                                    <input type="hidden" id="orgnameSkill2" name="orgnameSkill2" value="{{$sheet2->orgnameSkill2}}">
                                                    <input type="hidden" id="orgnameDistinct2" name="orgnameDistinct2" value="{{$sheet2->orgnameDistinct2}}">
                                                    <input type="hidden" id="orgnameMembership2" name="orgnameMembership2" value="{{$sheet2->orgnameMembership2}}">
                                                    <input type="hidden" id="orgnameSkill3" name="orgnameSkill3" value="{{$sheet2->orgnameSkill3}}">
                                                    <input type="hidden" id="orgnameDistinct3" name="orgnameDistinct3" value="{{$sheet2->orgnameDistinct3}}">
                                                    <input type="hidden" id="orgnameMembership3" name="orgnameMembership3" value="{{$sheet2->orgnameMembership3}}">
                                                    <input type="hidden" id="orgnameSkill4" name="orgnameSkill4" value="{{$sheet2->orgnameSkill4}}">
                                                    <input type="hidden" id="orgnameDistinct4" name="orgnameDistinct4" value="{{$sheet2->orgnameDistinct4}}">
                                                    <input type="hidden" id="orgnameMembership4" name="orgnameMembership4" value="{{$sheet2->orgnameMembership4}}">
                                                    <input type="hidden" id="orgnameSkill5" name="orgnameSkill5" value="{{$sheet2->orgnameSkill5}}">
                                                    <input type="hidden" id="orgnameDistinct5" name="orgnameDistinct5" value="{{$sheet2->orgnameDistinct5}}">
                                                    <input type="hidden" id="orgnameMembership5" name="orgnameMembership5" value="{{$sheet2->orgnameMembership5}}">
                                                    <input type="hidden" id="orgnameSkill6" name="orgnameSkill6" value="{{$sheet2->orgnameSkill6}}">
                                                    <input type="hidden" id="orgnameDistinct6" name="orgnameDistinct6" value="{{$sheet2->orgnameDistinct6}}">
                                                    <input type="hidden" id="orgnameMembership6" name="orgnameMembership6" value="{{$sheet2->orgnameMembership6}}">

                                                        @foreach ($products2 as $sheet3)
                                                        <input type="hidden" id="eligibility" name="eligibility" value="{{$sheet3->eligibility}}">
                                                        <input type="hidden" id="rating" name="rating" value="{{$sheet3->rating}}">
                                                        <input type="hidden" id="dateofexam" name="dateofexam" value="{{$sheet3->dateofexam}}">
                                                        <input type="hidden" id="placeofexam" name="placeofexam" value="{{$sheet3->placeofexam}}">
                                                        <input type="hidden" id="licenseno" name="licenseno" value="{{$sheet3->licenseno}}">
                                                        <input type="hidden" id="validity" name="validity" value="{{$sheet3->validity}}">

                                                        <input type="hidden" id="eligibility" name="eligibility2" value="{{$sheet3->eligibility2}}">
                                                        <input type="hidden" id="rating" name="rating2" value="{{$sheet3->rating2}}">
                                                        <input type="hidden" id="dateofexam" name="dateofexam2" value="{{$sheet3->dateofexam2}}">
                                                        <input type="hidden" id="placeofexam" name="placeofexam2" value="{{$sheet3->placeofexam2}}">
                                                        <input type="hidden" id="licenseno" name="licenseno2" value="{{$sheet3->licenseno2}}">
                                                        <input type="hidden" id="validity" name="validity2" value="{{$sheet3->validity2}}">

                                                        <input type="hidden" id="eligibility" name="eligibility3" value="{{$sheet3->eligibility3}}">
                                                        <input type="hidden" id="rating" name="rating3" value="{{$sheet3->rating3}}">
                                                        <input type="hidden" id="dateofexam" name="dateofexam3" value="{{$sheet3->dateofexam3}}">
                                                        <input type="hidden" id="placeofexam" name="placeofexam3" value="{{$sheet3->placeofexam3}}">
                                                        <input type="hidden" id="licenseno" name="licenseno3" value="{{$sheet3->licenseno3}}">
                                                        <input type="hidden" id="validity" name="validity3" value="{{$sheet3->validity3}}">

                                                        <input type="hidden" id="eligibility" name="eligibility4" value="{{$sheet3->eligibility4}}">
                                                        <input type="hidden" id="rating" name="rating4" value="{{$sheet3->rating4}}">
                                                        <input type="hidden" id="dateofexam" name="dateofexam4" value="{{$sheet3->dateofexam4}}">
                                                        <input type="hidden" id="placeofexam" name="placeofexam4" value="{{$sheet3->placeofexam4}}">
                                                        <input type="hidden" id="licenseno" name="licenseno4" value="{{$sheet3->licenseno4}}">
                                                        <input type="hidden" id="validity" name="validity4" value="{{$sheet3->validity4}}">

                                                        <input type="hidden" id="eligibility" name="eligibility5" value="{{$sheet3->eligibility5}}">
                                                        <input type="hidden" id="rating" name="rating5" value="{{$sheet3->rating5}}">
                                                        <input type="hidden" id="dateofexam" name="dateofexam5" value="{{$sheet3->dateofexam5}}">
                                                        <input type="hidden" id="placeofexam" name="placeofexam5" value="{{$sheet3->placeofexam5}}">
                                                        <input type="hidden" id="licenseno" name="licenseno5" value="{{$sheet3->licenseno5}}">
                                                        <input type="hidden" id="validity" name="validity5" value="{{$sheet3->validity5}}">

                                                        <input type="hidden" id="eligibility" name="eligibility6" value="{{$sheet3->eligibility6}}">
                                                        <input type="hidden" id="rating" name="rating6" value="{{$sheet3->rating6}}">
                                                        <input type="hidden" id="dateofexam" name="dateofexam6" value="{{$sheet3->dateofexam6}}">
                                                        <input type="hidden" id="placeofexam" name="placeofexam6" value="{{$sheet3->placeofexam6}}">
                                                        <input type="hidden" id="licenseno" name="licenseno6" value="{{$sheet3->licenseno6}}">
                                                        <input type="hidden" id="validity" name="validity6" value="{{$sheet3->validity6}}">

                                                        <input type="hidden" id="eligibility" name="eligibility7" value="{{$sheet3->eligibility7}}">
                                                        <input type="hidden" id="rating" name="rating7" value="{{$sheet3->rating7}}">
                                                        <input type="hidden" id="dateofexam" name="dateofexam7" value="{{$sheet3->dateofexam7}}">
                                                        <input type="hidden" id="placeofexam" name="placeofexam7" value="{{$sheet3->placeofexam7}}">
                                                        <input type="hidden" id="licenseno" name="licenseno7" value="{{$sheet3->licenseno7}}">
                                                        <input type="hidden" id="validity" name="validity7" value="{{$sheet3->validity7}}">

                                                        <input type="hidden" id="datefrom" name="datefrom" value="{{$sheet3->datefrom}}">
                                                        <input type="hidden" id="dateto" name="dateto" value="{{$sheet3->dateto}}">
                                                        <input type="hidden" id="position" name="position" value="{{$sheet3->position}}">
                                                        <input type="hidden" id="department" name="department" value="{{$sheet3->department}}">
                                                        <input type="hidden" id="salary" name="salary" value="{{$sheet3->salary}}">
                                                        <input type="hidden" id="paygrade" name="paygrade" value="{{$sheet3->paygrade}}">
                                                        <input type="hidden" id="appointment" name="appointment" value="{{$sheet3->appointment}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv" value="{{$sheet3->governmentserv}}">

                                                        <input type="hidden" id="datefrom" name="datefrom2" value="{{$sheet3->datefrom2}}">
                                                        <input type="hidden" id="dateto" name="dateto2" value="{{$sheet3->dateto2}}">
                                                        <input type="hidden" id="position" name="position2" value="{{$sheet3->position2}}">
                                                        <input type="hidden" id="department" name="department2" value="{{$sheet3->department2}}">
                                                        <input type="hidden" id="salary" name="salary2" value="{{$sheet3->salary2}}">
                                                        <input type="hidden" id="paygrade" name="paygrade2" value="{{$sheet3->paygrade2}}">
                                                        <input type="hidden" id="appointment" name="appointment2" value="{{$sheet3->appointment2}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv2" value="{{$sheet3->governmentserv2}}">

                                                        <input type="hidden" id="datefrom" name="datefrom3" value="{{$sheet3['datefrom3']}}">
                                                        <input type="hidden" id="dateto" name="dateto3" value="{{$sheet3['dateto3']}}">
                                                        <input type="hidden" id="position" name="position3" value="{{$sheet3['position3']}}">
                                                        <input type="hidden" id="department" name="department3" value="{{$sheet3['department3']}}">
                                                        <input type="hidden" id="salary" name="salary3" value="{{$sheet3['salary3']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade3" value="{{$sheet3['paygrade3']}}">
                                                        <input type="hidden" id="appointment" name="appointment3" value="{{$sheet3['appointment3']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv3" value="{{$sheet3['governmentserv3']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom4" value="{{$sheet3['datefrom4']}}">
                                                        <input type="hidden" id="dateto" name="dateto4" value="{{$sheet3['dateto4']}}">
                                                        <input type="hidden" id="position" name="position4" value="{{$sheet3['position4']}}">
                                                        <input type="hidden" id="department" name="department4" value="{{$sheet3['department4']}}">
                                                        <input type="hidden" id="salary" name="salary4" value="{{$sheet3['salary4']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade4" value="{{$sheet3['paygrade4']}}">
                                                        <input type="hidden" id="appointment" name="appointment4" value="{{$sheet3['appointment4']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv4" value="{{$sheet3['governmentserv4']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom5" value="{{$sheet3['datefrom5']}}">
                                                        <input type="hidden" id="dateto" name="dateto5" value="{{$sheet3['dateto5']}}">
                                                        <input type="hidden" id="position" name="position5" value="{{$sheet3['position5']}}">
                                                        <input type="hidden" id="department" name="department5" value="{{$sheet3['department5']}}">
                                                        <input type="hidden" id="salary" name="salary5" value="{{$sheet3['salary5']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade5" value="{{$sheet3['paygrade5']}}">
                                                        <input type="hidden" id="appointment" name="appointment5" value="{{$sheet3['appointment5']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv5" value="{{$sheet3['governmentserv5']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom6" value="{{$sheet3['datefrom6']}}">
                                                        <input type="hidden" id="dateto" name="dateto6" value="{{$sheet3['dateto6']}}">
                                                        <input type="hidden" id="position" name="position6" value="{{$sheet3['position6']}}">
                                                        <input type="hidden" id="department" name="department6" value="{{$sheet3['department6']}}">
                                                        <input type="hidden" id="salary" name="salary6" value="{{$sheet3['salary6']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade6" value="{{$sheet3['paygrade6']}}">
                                                        <input type="hidden" id="appointment" name="appointment6" value="{{$sheet3['appointment6']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv6" value="{{$sheet3['governmentserv6']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom7" value="{{$sheet3['datefrom7']}}">
                                                        <input type="hidden" id="dateto" name="dateto7" value="{{$sheet3['dateto7']}}">
                                                        <input type="hidden" id="position" name="position7" value="{{$sheet3['position7']}}">
                                                        <input type="hidden" id="department" name="department7" value="{{$sheet3['department7']}}">
                                                        <input type="hidden" id="salary" name="salary7" value="{{$sheet3['salary7']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade7" value="{{$sheet3['paygrade7']}}">
                                                        <input type="hidden" id="appointment" name="appointment7" value="{{$sheet3['appointment7']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv7" value="{{$sheet3['governmentserv7']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom8" value="{{$sheet3['datefrom8']}}">
                                                        <input type="hidden" id="dateto" name="dateto8" value="{{$sheet3['dateto8']}}">
                                                        <input type="hidden" id="position" name="position8" value="{{$sheet3['position8']}}">
                                                        <input type="hidden" id="department" name="department8" value="{{$sheet3['department8']}}">
                                                        <input type="hidden" id="salary" name="salary8" value="{{$sheet3['salary8']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade8" value="{{$sheet3['paygrade8']}}">
                                                        <input type="hidden" id="appointment" name="appointment8" value="{{$sheet3['appointment8']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv8" value="{{$sheet3['governmentserv8']}}">

                                                        <input type="hidden" id="datefrom" name="datefrom9" value="{{$sheet3['datefrom9']}}">
                                                        <input type="hidden" id="dateto" name="dateto9" value="{{$sheet3['dateto9']}}">
                                                        <input type="hidden" id="position" name="position9" value="{{$sheet3['position9']}}">
                                                        <input type="hidden" id="department" name="department9" value="{{$sheet3['department9']}}">
                                                        <input type="hidden" id="salary" name="salary9" value="{{$sheet3['salary9']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade9" value="{{$sheet3['paygrade9']}}">
                                                        <input type="hidden" id="appointment" name="appointment9" value="{{$sheet3['appointment9']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv9" value="{{$sheet3['governmentserv9']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom10" value="{{$sheet3['datefrom10']}}">
                                                        <input type="hidden" id="dateto" name="dateto10" value="{{$sheet3['dateto10']}}">
                                                        <input type="hidden" id="position" name="position10" value="{{$sheet3['position10']}}">
                                                        <input type="hidden" id="department" name="department10" value="{{$sheet3['department10']}}">
                                                        <input type="hidden" id="salary" name="salary10" value="{{$sheet3['salary10']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade10" value="{{$sheet3['paygrade10']}}">
                                                        <input type="hidden" id="appointment" name="appointment10" value="{{$sheet3['appointment10']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv10" value="{{$sheet3['governmentserv10']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom11" value="{{$sheet3['datefrom11']}}">
                                                        <input type="hidden" id="dateto" name="dateto11" value="{{$sheet3['dateto11']}}">
                                                        <input type="hidden" id="position" name="position11" value="{{$sheet3['position11']}}">
                                                        <input type="hidden" id="department" name="department11" value="{{$sheet3['department11']}}">
                                                        <input type="hidden" id="salary" name="salary11" value="{{$sheet3['salary11']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade11" value="{{$sheet3['paygrade11']}}">
                                                        <input type="hidden" id="appointment" name="appointment11" value="{{$sheet3['appointment11']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv11" value="{{$sheet3['governmentserv11']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom12" value="{{$sheet3['datefrom12']}}">
                                                        <input type="hidden" id="dateto" name="dateto12" value="{{$sheet3['dateto12']}}">
                                                        <input type="hidden" id="position" name="position12" value="{{$sheet3['position12']}}">
                                                        <input type="hidden" id="department" name="department12" value="{{$sheet3['department12']}}">
                                                        <input type="hidden" id="salary" name="salary12" value="{{$sheet3['salary12']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade12" value="{{$sheet3['paygrade12']}}">
                                                        <input type="hidden" id="appointment" name="appointment12" value="{{$sheet3['appointment12']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv12" value="{{$sheet3['governmentserv12']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom13" value="{{$sheet3['datefrom13']}}">
                                                        <input type="hidden" id="dateto" name="dateto13" value="{{$sheet3['dateto13']}}">
                                                        <input type="hidden" id="position" name="position13" value="{{$sheet3['position13']}}">
                                                        <input type="hidden" id="department" name="department13" value="{{$sheet3['department13']}}">
                                                        <input type="hidden" id="salary" name="salary13" value="{{$sheet3['salary13']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade13" value="{{$sheet3['paygrade13']}}">
                                                        <input type="hidden" id="appointment" name="appointment13" value="{{$sheet3['appointment13']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv13" value="{{$sheet3['governmentserv13']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom14" value="{{$sheet3['datefrom14']}}">
                                                        <input type="hidden" id="dateto" name="dateto14" value="{{$sheet3['dateto14']}}">
                                                        <input type="hidden" id="position" name="position14" value="{{$sheet3['position14']}}">
                                                        <input type="hidden" id="department" name="department14" value="{{$sheet3['department14']}}">
                                                        <input type="hidden" id="salary" name="salary14" value="{{$sheet3['salary14']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade14" value="{{$sheet3['paygrade14']}}">
                                                        <input type="hidden" id="appointment" name="appointment14" value="{{$sheet3['appointment14']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv14" value="{{$sheet3['governmentserv14']}}">

                                                        <input type="hidden" id="datefrom" name="datefrom15" value="{{$sheet3['datefrom15']}}">
                                                        <input type="hidden" id="dateto" name="dateto15" value="{{$sheet3['dateto15']}}">
                                                        <input type="hidden" id="position" name="position15" value="{{$sheet3['position15']}}">
                                                        <input type="hidden" id="department" name="department15" value="{{$sheet3['department15']}}">
                                                        <input type="hidden" id="salary" name="salary15" value="{{$sheet3['salary15']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade15" value="{{$sheet3['paygrade15']}}">
                                                        <input type="hidden" id="appointment" name="appointment15" value="{{$sheet3['appointment15']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv15" value="{{$sheet3['governmentserv15']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom16" value="{{$sheet3['datefrom16']}}">
                                                        <input type="hidden" id="dateto" name="dateto16" value="{{$sheet3['dateto16']}}">
                                                        <input type="hidden" id="position" name="position16" value="{{$sheet3['position16']}}">
                                                        <input type="hidden" id="department" name="department16" value="{{$sheet3['department16']}}">
                                                        <input type="hidden" id="salary" name="salary16" value="{{$sheet3['salary16']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade16" value="{{$sheet3['paygrade16']}}">
                                                        <input type="hidden" id="appointment" name="appointment16" value="{{$sheet3['appointment16']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv16" value="{{$sheet3['governmentserv16']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom17" value="{{$sheet3['datefrom17']}}">
                                                        <input type="hidden" id="dateto" name="dateto17" value="{{$sheet3['dateto17']}}">
                                                        <input type="hidden" id="position" name="position17" value="{{$sheet3['position17']}}">
                                                        <input type="hidden" id="department" name="department17" value="{{$sheet3['department17']}}">
                                                        <input type="hidden" id="salary" name="salary17" value="{{$sheet3['salary17']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade17" value="{{$sheet3['paygrade17']}}">
                                                        <input type="hidden" id="appointment" name="appointment17" value="{{$sheet3['appointment17']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv17" value="{{$sheet3['governmentserv17']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom18" value="{{$sheet3['datefrom18']}}">
                                                        <input type="hidden" id="dateto" name="dateto18" value="{{$sheet3['dateto18']}}">
                                                        <input type="hidden" id="position" name="position18" value="{{$sheet3['position18']}}">
                                                        <input type="hidden" id="department" name="department18" value="{{$sheet3['department18']}}">
                                                        <input type="hidden" id="salary" name="salary18" value="{{$sheet3['salary18']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade18" value="{{$sheet3['paygrade18']}}">
                                                        <input type="hidden" id="appointment" name="appointment18" value="{{$sheet3['appointment18']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv18" value="{{$sheet3['governmentserv18']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom19" value="{{$sheet3['datefrom19']}}">
                                                        <input type="hidden" id="dateto" name="dateto19" value="{{$sheet3['dateto19']}}">
                                                        <input type="hidden" id="position" name="position19" value="{{$sheet3['position19']}}">
                                                        <input type="hidden" id="department" name="department19" value="{{$sheet3['department19']}}">
                                                        <input type="hidden" id="salary" name="salary19" value="{{$sheet3['salary19']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade19" value="{{$sheet3['paygrade19']}}">
                                                        <input type="hidden" id="appointment" name="appointment19" value="{{$sheet3['appointment19']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv19" value="{{$sheet3['governmentserv19']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom20" value="{{$sheet3['datefrom20']}}">
                                                        <input type="hidden" id="dateto" name="dateto20" value="{{$sheet3['dateto20']}}">
                                                        <input type="hidden" id="position" name="position20" value="{{$sheet3['position20']}}">
                                                        <input type="hidden" id="department" name="department20" value="{{$sheet3['department20']}}">
                                                        <input type="hidden" id="salary" name="salary20" value="{{$sheet3['salary20']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade20" value="{{$sheet3['paygrade20']}}">
                                                        <input type="hidden" id="appointment" name="appointment20" value="{{$sheet3['appointment20']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv20" value="{{$sheet3['governmentserv20']}}">

                                                        <input type="hidden" id="datefrom" name="datefrom21" value="{{$sheet3['datefrom21']}}">
                                                        <input type="hidden" id="dateto" name="dateto21" value="{{$sheet3['dateto21']}}">
                                                        <input type="hidden" id="position" name="position21" value="{{$sheet3['position21']}}">
                                                        <input type="hidden" id="department" name="department21" value="{{$sheet3['department21']}}">
                                                        <input type="hidden" id="salary" name="salary21" value="{{$sheet3['salary21']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade21" value="{{$sheet3['paygrade21']}}">
                                                        <input type="hidden" id="appointment" name="appointment21" value="{{$sheet3['appointment21']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv21" value="{{$sheet3['governmentserv21']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom22" value="{{$sheet3['datefrom22']}}">
                                                        <input type="hidden" id="dateto" name="dateto22" value="{{$sheet3['dateto22']}}">
                                                        <input type="hidden" id="position" name="position22" value="{{$sheet3['position22']}}">
                                                        <input type="hidden" id="department" name="department22" value="{{$sheet3['department22']}}">
                                                        <input type="hidden" id="salary" name="salary22" value="{{$sheet3['salary22']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade22" value="{{$sheet3['paygrade22']}}">
                                                        <input type="hidden" id="appointment" name="appointment22" value="{{$sheet3['appointment22']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv22" value="{{$sheet3['governmentserv22']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom23" value="{{$sheet3['datefrom23']}}">
                                                        <input type="hidden" id="dateto" name="dateto23" value="{{$sheet3['dateto23']}}">
                                                        <input type="hidden" id="position" name="position23" value="{{$sheet3['position23']}}">
                                                        <input type="hidden" id="department" name="department23" value="{{$sheet3['department23']}}">
                                                        <input type="hidden" id="salary" name="salary23" value="{{$sheet3['salary23']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade23" value="{{$sheet3['paygrade23']}}">
                                                        <input type="hidden" id="appointment" name="appointment23" value="{{$sheet3['appointment23']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv23" value="{{$sheet3['governmentserv23']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom24" value="{{$sheet3['datefrom24']}}">
                                                        <input type="hidden" id="dateto" name="dateto24" value="{{$sheet3['dateto24']}}">
                                                        <input type="hidden" id="position" name="position24" value="{{$sheet3['position24']}}">
                                                        <input type="hidden" id="department" name="department24" value="{{$sheet3['department24']}}">
                                                        <input type="hidden" id="salary" name="salary24" value="{{$sheet3['salary24']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade24" value="{{$sheet3['paygrade24']}}">
                                                        <input type="hidden" id="appointment" name="appointment24" value="{{$sheet3['appointment24']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv24" value="{{$sheet3['governmentserv24']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom25" value="{{$sheet3['datefrom25']}}">
                                                        <input type="hidden" id="dateto" name="dateto25" value="{{$sheet3['dateto25']}}">
                                                        <input type="hidden" id="position" name="position25" value="{{$sheet3['position25']}}">
                                                        <input type="hidden" id="department" name="department25" value="{{$sheet3['department25']}}">
                                                        <input type="hidden" id="salary" name="salary25" value="{{$sheet3['salary25']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade25" value="{{$sheet3['paygrade25']}}">
                                                        <input type="hidden" id="appointment" name="appointment25" value="{{$sheet3['appointment25']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv25" value="{{$sheet3['governmentserv25']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom26" value="{{$sheet3['datefrom26']}}">
                                                        <input type="hidden" id="dateto" name="dateto26" value="{{$sheet3['dateto26']}}">
                                                        <input type="hidden" id="position" name="position26" value="{{$sheet3['position26']}}">
                                                        <input type="hidden" id="department" name="department26" value="{{$sheet3['department26']}}">
                                                        <input type="hidden" id="salary" name="salary26" value="{{$sheet3['salary26']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade26" value="{{$sheet3['paygrade26']}}">
                                                        <input type="hidden" id="appointment" name="appointment26" value="{{$sheet3['appointment26']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv26" value="{{$sheet3['governmentserv26']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom27" value="{{$sheet3['datefrom27']}}">
                                                        <input type="hidden" id="dateto" name="dateto27" value="{{$sheet3['dateto27']}}">
                                                        <input type="hidden" id="position" name="position27" value="{{$sheet3['position27']}}">
                                                        <input type="hidden" id="department" name="department27" value="{{$sheet3['department27']}}">
                                                        <input type="hidden" id="salary" name="salary27" value="{{$sheet3['salary27']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade27" value="{{$sheet3['paygrade27']}}">
                                                        <input type="hidden" id="appointment" name="appointment27" value="{{$sheet3['appointment27']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv27" value="{{$sheet3['governmentserv27']}}">
                                                        <input type="hidden" id="datefrom" name="datefrom28" value="{{$sheet3['datefrom28']}}">
                                                        <input type="hidden" id="dateto" name="dateto28" value="{{$sheet3['dateto28']}}">
                                                        <input type="hidden" id="position" name="position28" value="{{$sheet3['position28']}}">
                                                        <input type="hidden" id="department" name="department28" value="{{$sheet3['department28']}}">
                                                        <input type="hidden" id="salary" name="salary28" value="{{$sheet3['salary28']}}">
                                                        <input type="hidden" id="paygrade" name="paygrade28" value="{{$sheet3['paygrade28']}}">
                                                        <input type="hidden" id="appointment" name="appointment28" value="{{$sheet3['appointment28']}}">
                                                        <input type="hidden" id="governmentserv" name="governmentserv28" value="{{$sheet3['governmentserv28']}}">
                                                            {{-- @foreach ($products4 as $sheet4 )
                                                                <input type="hidden" id="form_id" name="form_id" value="{{$sheet4['id']}}">
                                                            @endforeach --}}

                                                        @endforeach

                                                    @endforeach



                                                    <button type="submit" class="btn btn-outline-primary">Excel</button>
                                                </form>




                                                </td>
                                            </tr>


                                            @endforeach
                            </tbody>
                        </table>
                    </div>

                <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
                <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
                <script>
                    $ (document).ready( function () {
                         $('#Mytable').DataTable();
                    } );
                </script>

    <script>

        //  sweet alert for downloading

        function excelAlert(sheetID) {
            var url = "{{ route('download-excel-id', ':id') }}";
            url = url.replace(':id', sheetID);

        event.preventDefault();
            Swal.fire({
                title: 'Download Excel?',
                showDenyButton: true,
                confirmButtonText: 'Yes',
                denyButtonText: 'No',
                customClass: {
                    actions: 'my-actions',
                    confirmButton: 'order-2',
                    denyButton: 'order-3',
                }
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire('Downloading...', '', 'success');
                    window.location = url;
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
                })
        }

            function pdfAlert(sheetID) {
            var url = "{{ route('render-pdf-id', ':id') }}";
            url = url.replace(':id', sheetID);

            // alert(sheetID);
            event.preventDefault();
            Swal.fire({
                title: 'Download PDF?',
                showDenyButton: true,
                confirmButtonText: 'Yes',
                denyButtonText: 'No',
                customClass: {
                    actions: 'my-actions',
                    confirmButton: 'order-2',
                    denyButton: 'order-3',
                }
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire('Downloading...', '', 'success');
                    window.location = url;
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
                })
        }

    </script>
@endsection



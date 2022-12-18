<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Facades\App;
use App\Form;
use App\Sheet;
use App\Sheet2;
use App\Sheet3;
use Maatwebsite\Excel\Facades\Excel;

class SheetController extends Controller
{
    public function excel_from(){

        Excel::load('C:\xampp\htdocs\personaldatasheet\resources\views\excel_forms\c1form.xlsx', function($Excel) {
            $Excel->sheet('C1DATA', function($sheet) {

                    //General Information
                    $sheet->cell('D10', function($cell) {
                        $cell->setValue($_GET['surname']);
                    });
                    $sheet->cell('D11', function($cell) {
                        $cell->setValue($_GET['firstname']);
                    });
                    $sheet->cell('L11', function($cell){
                        $cell->setValue($_GET['firstnameext']);
                    });
                    $sheet->cell('D12',function($cell){
                        $cell->setValue($_GET['midname']);
                    });
                    $sheet->cell('D13',function($cell){
                        $cell->setValue($_GET['birthdate']);
                    });
                    $sheet->cell('D15',function($cell){
                        $cell->setValue($_GET['placeofBirth']);
                    });
                    $sheet->cell('D16', function($cell){
                        $cell->setValue($_GET['sex'] === 'male' ? '     ☑ Male' : '     ☐ Male' );
                    });
                    $sheet->cell('E16', function($cell){
                        $cell->setValue($_GET['sex'] === 'female' ? '     ☑ Female' : '     ☐ Female' );
                    });
                    $sheet->cell('D22',function($cell){
                        $cell->setValue($_GET['height']);
                    });
                    $sheet->cell('D24',function($cell){
                        $cell->setValue($_GET['weight']);
                    });
                    $sheet->cell('D25',function($cell){
                        $cell->setValue($_GET['bloodType']);
                    });
                    $sheet->cell('J13', function($cell){
                        $cell->setValue($_GET['citizens'] === 'Filipino' ? '  ☑ Filipino' : '  ☐ Filipino' );
                    });
                    $sheet->cell('L13', function($cell){
                        $cell->setValue($_GET['citizens'] === 'Dual Citizenship' ? '  ☑ Dual Citizenship' : '  ☐ Dual Citizenship' );
                    });
                    $sheet->cell('L14', function($cell){
                        $cell->setValue($_GET['dualcitizenType'] === 'by birth' ? '  ☑ By Birth' : '  ☐ Birth' );
                    });
                    $sheet->cell('M14', function($cell){
                        $cell->setValue($_GET['dualcitizenType'] === 'by naturalization' ? '  ☑ By Naturalization' : '  ☐ By Naturalization' );
                    });
                    $sheet->cell('J16', function($cell){
                        $cell->setValue($_GET['country']);
                    });
                    $sheet->cell('D17', function($cell){
                        $cell->setValue($_GET['civilStatus'] === 'single' ? '  ☑ Single' : '  ☐ Single' );
                    });
                    $sheet->cell('E17', function($cell){
                        $cell->setValue($_GET['civilStatus'] === 'married' ? '  ☑ Married' : '  ☐ Married' );
                    });
                    $sheet->cell('D18', function($cell){
                        $cell->setValue($_GET['civilStatus'] === 'widowed' ? '  ☑ Widowed' : '  ☐ Widowed' );
                    });
                    $sheet->cell('E18', function($cell){
                        $cell->setValue($_GET['civilStatus'] === 'separated' ? '  ☑ Separated' : '  ☐ Separated' );
                    });
                    $sheet->cell('D20', function($cell){
                        $cell->setValue($_GET['civilStatus'] === 'other' ? '  ☑ Other/s:' : '  ☐ Other/s:' );
                    });
                    $sheet->cell('E20', function($cell){
                        $cell->setValue($_GET['civilother']);
                    });



                    //-General Information End

                    // Residential Address Data
                    $sheet->cell('I17',function($cell){
                        $cell->setValue($_GET['residentialhouse']);
                    });
                    $sheet->cell('L17',function($cell){
                        $cell->setValue($_GET['residentialst']);
                    });
                    $sheet->cell('I19',function($cell){
                        $cell->setValue($_GET['residentialsudv']);
                    });
                    $sheet->cell('L19',function($cell){
                        $cell->setValue($_GET['residentialbrgy']);
                    });
                    $sheet->cell('I22',function($cell){
                        $cell->setValue($_GET['residentialcity']);
                    });
                    $sheet->cell('L22',function($cell){
                        $cell->setValue($_GET['residentialprv']);
                    });
                    $sheet->cell('I24', function($cell){
                        $cell->setValue($_GET['residentialzip']);
                    });
                    // Residential Address Data End

                    // Permanent Address Data
                    $sheet->cell('I25',function($cell){
                        $cell->setValue($_GET['permanenthouse']);
                    });
                    $sheet->cell('L25',function($cell){
                        $cell->setValue($_GET['permanentst']);
                    });
                    $sheet->cell('I27',function($cell){
                        $cell->setValue($_GET['permanentsubdv']);
                    });
                    $sheet->cell('L27',function($cell){
                        $cell->setValue($_GET['permanentbrgy']);
                    });
                    $sheet->cell('I29',function($cell){
                        $cell->setValue($_GET['permanentcity']);
                    });
                    $sheet->cell('L29',function($cell){
                        $cell->setValue($_GET['permanentprv']);
                    });
                    $sheet->cell('I31', function($cell){
                        $cell->setValue($_GET['permanentzip']);
                    });
                    //Permanent Address Data end

                    //contact information
                    $sheet->cell('I32',function($cell){
                        $cell->setValue($_GET['telno']);
                    });
                    $sheet->cell('I33', function($cell){
                        $cell->setValue($_GET['mobno']);
                    });
                    $sheet->cell('I34', function($cell){
                        $cell->setValue($_GET['email']);
                    });


                    //Gov't IDs
                    $sheet->cell('D27',function($cell){
                        $cell->setValue($_GET['gsisno']);
                    });
                    $sheet->cell('D29',function($cell){
                        $cell->setValue($_GET['pagibigno']);
                    });
                    $sheet->cell('D31',function($cell){
                        $cell->setValue($_GET['philhealthno']);
                    });
                    $sheet->cell('D32',function($cell){
                        $cell->setValue($_GET['sssno']);
                    });
                    $sheet->cell('D33',function($cell){
                        $cell->setValue($_GET['tinno']);
                    });
                    $sheet->cell('D34',function($cell){
                        $cell->setValue($_GET['agencyemp']);
                    });
                    //Gov't ID's end

                    //Spouse Information
                    $sheet->cell('D36',function($cell){
                        $cell->setValue($_GET['spousesn']);
                    });
                    $sheet->cell('D37',function($cell){
                        $cell->setValue($_GET['spousefn']);
                    });
                    $sheet->cell('G37',function($cell){
                        $cell->setValue($_GET['spousenmext']);
                    });
                    $sheet->cell('D38',function($cell){
                        $cell->setValue($_GET['spousemn']);
                    });
                    $sheet->cell('D39',function($cell){
                        $cell->setValue($_GET['spouseocc']);
                    });
                    $sheet->cell('D40',function($cell){
                        $cell->setValue($_GET['spouseemp']);
                    });
                    $sheet->cell('D41',function($cell){
                        $cell->setValue($_GET['spouseempadd']);
                    });
                    $sheet->cell('D42',function($cell){
                        $cell->setValue($_GET['spousetel']);
                    });
                    //Spouse Information End

                    //Father's Information
                    $sheet->cell('D43',function($cell){
                        $cell->setValue($_GET['fathersn']);
                    });
                    $sheet->cell('D44',function($cell){
                        $cell->setValue($_GET['fatherfn']);
                    });
                    $sheet->cell('G44',function($cell){
                        $cell->setValue($_GET['fatherext']);
                    });
                    $sheet->cell('D45',function($cell){
                        $cell->setValue($_GET['fathermn']);
                    });
                    //Father's Information End

                    //Mother's Information
                    $sheet->cell('D46',function($cell){
                        $cell->setValue($_GET['mothernm']);
                    });
                    $sheet->cell('D47',function($cell){
                        $cell->setValue($_GET['mothersn']);
                    });
                    $sheet->cell('D48',function($cell){
                        $cell->setValue($_GET['motherfn']);
                    });
                    $sheet->cell('D49',function($cell){
                        $cell->setValue($_GET['mothermn']);
                    });
                    //Mother's Information End

                    //Children
                    $sheet->cell('I37',function($cell){
                        $cell->setValue($_GET['child0']);
                    });
                    $sheet->cell('M37',function($cell){
                        $cell->setValue($_GET['birthchild0']);
                    });
                    $sheet->cell('I38',function($cell){
                        $cell->setValue($_GET['child1']);
                    });
                    $sheet->cell('M38',function($cell){
                        $cell->setValue($_GET['birthchild1']);
                    });
                    $sheet->cell('I39',function($cell){
                        $cell->setValue($_GET['child2']);
                    });
                    $sheet->cell('M39',function($cell){
                        $cell->setValue($_GET['birthchild2']);
                    });
                    $sheet->cell('I40',function($cell){
                        $cell->setValue($_GET['child3']);
                    });
                    $sheet->cell('M40',function($cell){
                        $cell->setValue($_GET['birthchild3']);
                    });
                    $sheet->cell('I41',function($cell){
                        $cell->setValue($_GET['child4']);
                    });
                    $sheet->cell('M41',function($cell){
                        $cell->setValue($_GET['birthchild4']);
                    });
                    $sheet->cell('I42',function($cell){
                        $cell->setValue($_GET['child5']);
                    });
                    $sheet->cell('M42',function($cell){
                        $cell->setValue($_GET['birthchild5']);
                    });
                    $sheet->cell('I43',function($cell){
                        $cell->setValue($_GET['child6']);
                    });
                    $sheet->cell('M43',function($cell){
                        $cell->setValue($_GET['birthchild6']);
                    });
                    $sheet->cell('I44',function($cell){
                        $cell->setValue($_GET['child7']);
                    });
                    $sheet->cell('M44',function($cell){
                        $cell->setValue($_GET['birthchild7']);
                    });
                    $sheet->cell('I45',function($cell){
                        $cell->setValue($_GET['child8']);
                    });
                    $sheet->cell('M45',function($cell){
                        $cell->setValue($_GET['birthchild8']);
                    });
                    $sheet->cell('I46',function($cell){
                        $cell->setValue($_GET['child9']);
                    });
                    $sheet->cell('M46',function($cell){
                        $cell->setValue($_GET['birthchild9']);
                    });
                    $sheet->cell('I47',function($cell){
                        $cell->setValue($_GET['child10']);
                    });
                    $sheet->cell('M47',function($cell){
                        $cell->setValue($_GET['birthchild10']);
                    });
                    $sheet->cell('I48',function($cell){
                        $cell->setValue($_GET['child11']);
                    });
                    $sheet->cell('M48',function($cell){
                        $cell->setValue($_GET['birthchild11']);
                    });
                    //Children End

                    //Educational - Elementary
                    $sheet->cell('D54',function($cell){
                        $cell->setValue($_GET['elemname']);
                    });
                    $sheet->cell('G54',function($cell){
                        $cell->setValue($_GET['elemdeg']);
                    });
                    $sheet->cell('J54',function($cell){
                        $cell->setValue($_GET['attendancefrom']);
                    });
                    $sheet->cell('K54',function($cell){
                        $cell->setValue($_GET['attendanceto']);
                    });
                    $sheet->cell('L54',function($cell){
                        $cell->setValue($_GET['elemunitLevel']);
                    });
                    $sheet->cell('M54',function($cell){
                        $cell->setValue($_GET['yeargradelem']);
                    });
                    $sheet->cell('N54',function($cell){
                        $cell->setValue($_GET['scholarshipelem']);
                    });
                    //Educational - Elementary end

                    //Educational - High School
                    $sheet->cell('D55',function($cell){
                        $cell->setValue($_GET['hsname']);
                    });
                    $sheet->cell('G55',function($cell){
                        $cell->setValue($_GET['hsdeg']);
                    });
                    $sheet->cell('J55',function($cell){
                        $cell->setValue($_GET['attendancefromhs']);
                    });
                    $sheet->cell('K55',function($cell){
                        $cell->setValue($_GET['attendancetohs']);
                    });
                    $sheet->cell('L55',function($cell){
                        $cell->setValue($_GET['hsunitLevel']);
                    });
                    $sheet->cell('M55',function($cell){
                        $cell->setValue($_GET['yeargradhs']);
                    });
                    $sheet->cell('N55',function($cell){
                        $cell->setValue($_GET['scholarshiphs']);
                    });
                    //Educational - High School end

                    //Educational - Vocational
                    $sheet->cell('D56',function($cell){
                        $cell->setValue($_GET['vocname']);
                    });
                    $sheet->cell('G56',function($cell){
                        $cell->setValue($_GET['vocdeg']);
                    });
                    $sheet->cell('J56',function($cell){
                        $cell->setValue($_GET['attendancefromvoc']);
                    });
                    $sheet->cell('K56',function($cell){
                        $cell->setValue($_GET['attendancetovoc']);
                    });
                    $sheet->cell('L56',function($cell){
                        $cell->setValue($_GET['vocunitLevel']);
                    });
                    $sheet->cell('M56',function($cell){
                        $cell->setValue($_GET['yeargradvoc']);
                    });
                    $sheet->cell('N56',function($cell){
                        $cell->setValue($_GET['scholarshipvoc']);
                    });
                    //Educational - Vocational end

                    //Educational - College
                    $sheet->cell('D57',function($cell){
                        $cell->setValue($_GET['colname']);
                    });
                    $sheet->cell('G57',function($cell){
                        $cell->setValue($_GET['coldeg']);
                    });
                    $sheet->cell('J57',function($cell){
                        $cell->setValue($_GET['attendancefromcol']);
                    });
                    $sheet->cell('K57',function($cell){
                        $cell->setValue($_GET['attendancetocol']);
                    });
                    $sheet->cell('L57',function($cell){
                        $cell->setValue($_GET['colunitLevel']);
                    });
                    $sheet->cell('M57',function($cell){
                        $cell->setValue($_GET['yeargradcol']);
                    });
                    $sheet->cell('N57',function($cell){
                        $cell->setValue($_GET['scholarshipcol']);
                    });
                    //Educational - College end

                    //Edecational - Graduate
                    $sheet->cell('D58',function($cell){
                        $cell->setValue($_GET['gradname']);
                    });
                    $sheet->cell('G58',function($cell){
                        $cell->setValue($_GET['graddeg']);
                    });
                    $sheet->cell('J58',function($cell){
                        $cell->setValue($_GET['attendancefromgrad']);
                    });
                    $sheet->cell('K58',function($cell){
                        $cell->setValue($_GET['attendancetograd']);
                    });
                    $sheet->cell('L58',function($cell){
                        $cell->setValue($_GET['gradunitLevel']);
                    });
                    $sheet->cell('M58',function($cell){
                        $cell->setValue($_GET['yeargrad']);
                    });
                    $sheet->cell('N58',function($cell){
                        $cell->setValue($_GET['scholarshipgrad']);
                    });


             // if($_GET['sex'] == 'male'){
             //     $sheet->cell('D16', function($cell){
             //         $cell->setValue($_GET['sex']);
             //     });
             // }else{
             //     $sheet->cell('E16', function($cell){
             //         $cell->setValue($_GET['sex']);
             //     });
             // }

            });
        })->download('xlsx');
    }
}

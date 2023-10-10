<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class OldptrViewController extends Controller
{
    //
    public function index(){
        $collegelist = DB::select('SELECT * FROM public.collegemasterdata');
        $universitylist = DB::select('SELECT * FROM public.universitymasterfinal');
        $cptrlist = DB::select('SELECT * FROM public.accreditation_college_list');
        $uptrlist = DB::select('SELECT * FROM accreditation_University_list');
	$cgradelist = DB::select('SELECT * FROM accreditation_cycle1 where institution_type = 1  UNION ALL SELECT * FROM accreditation_cycle2 where institution_type = 1 UNION ALL SELECT * FROM accreditation_cycle3 where institution_type = 1 ORDER BY institution_id, cycle');

	$ugradelist = DB::select('SELECT * FROM accreditation_cycle1 where institution_type = 2  UNION ALL SELECT * FROM accreditation_cycle2 where institution_type = 2 UNION ALL SELECT * FROM accreditation_cycle3 where institution_type = 2 ORDER BY institution_id, cycle');

        return view('oldptr_view',compact('collegelist','universitylist','cptrlist','uptrlist','cgradelist','ugradelist' ));
        }

    public function universityptr(){
        $uptrlist = DB::select('SELECT * FROM accreditation_university_list  ');
        return view('view-universityptr',compact('uptrlist' ));
        }
    public function universitygrade(){

//	$ugradelist = DB::select('SELECT * FROM accreditation_cycle1 where institution_type = 2  UNION ALL SELECT * FROM accreditation_cycle2 where institution_type = 2 UNION ALL SELECT * FROM accreditation_cycle3 where institution_type = 2 ORDER BY institution_id, cycle');

$ugradelist = DB::select ('    (SELECT collegemasterdata.institution_name, trackid, accreditation_cycle1.institution_id,	cycle, 	ecno, 	ecapproveddate, grade, 	score, 	id, institution_type FROM accreditation_cycle1
inner join  collegemasterdata
on  accreditation_cycle1.Institution_id = collegemasterdata.Institution_id and institution_type = 2
order by institution_id, cycle )

UNION ALL

(SELECT collegemasterdata.institution_name, trackid, accreditation_cycle2.institution_id,	cycle, 	ecno, 	ecapproveddate, grade, 	score, 	id, institution_type FROM accreditation_cycle2
inner join  collegemasterdata
on  accreditation_cycle2.Institution_id = collegemasterdata.Institution_id and institution_type = 2
order by institution_id, cycle )

UNION ALL
(SELECT collegemasterdata.institution_name, trackid, accreditation_cycle3.institution_id,	cycle, 	ecno, 	ecapproveddate, grade, 	score, 	id, institution_type FROM accreditation_cycle3
inner join  collegemasterdata
on  accreditation_cycle3.Institution_id = collegemasterdata.Institution_id and institution_type = 2
order by institution_id, cycle )
order by institution_id, cycle');
        return view('view-universitygrade',compact('ugradelist' ));
        }
    public function universityec(){
        $ueclistfinal = DB::select('SELECT * FROM public.universityeclistfinal ');
        return view('view-universityec',compact('ueclistfinal' ));
        }
    public function universitydetails(){
        $universitymasterfinal= DB::select('SELECT * FROM public.universitymasterfinal ');
        $universityeclistfinal = DB::select('SELECT * FROM public.universityeclistfinal ');
        return view('view-universitydetails',compact('universitymasterfinal','universityeclistfinal' ));
        }
    public function collegeptr(){
        $cptrlist = DB::select('SELECT * FROM public.accreditation_college_list ');

        return view('view-collegeptr',compact('cptrlist' ));
        }
    public function collegegrade(){
//	$cgradelist = DB::select('SELECT * FROM accreditation_cycle1 where institution_type = 1  UNION ALL SELECT * FROM accreditation_cycle2 where institution_type = 1 UNION ALL SELECT * FROM accreditation_cycle3 where institution_type = 1 ORDER BY institution_id, cycle');

$cgradelist = DB::select ('    (SELECT collegemasterdata.institution_name, trackid, accreditation_cycle1.institution_id,	cycle, 	ecno, 	ecapproveddate, grade, 	score, 	id, institution_type FROM accreditation_cycle1
inner join  collegemasterdata
on  accreditation_cycle1.Institution_id = collegemasterdata.Institution_id and institution_type = 1
order by institution_id, cycle )

UNION ALL

(SELECT collegemasterdata.institution_name, trackid, accreditation_cycle2.institution_id,	cycle, 	ecno, 	ecapproveddate, grade, 	score, 	id, institution_type FROM accreditation_cycle2
inner join  collegemasterdata
on  accreditation_cycle2.Institution_id = collegemasterdata.Institution_id and institution_type = 1
order by institution_id, cycle )

UNION ALL
(SELECT collegemasterdata.institution_name, trackid, accreditation_cycle3.institution_id,	cycle, 	ecno, 	ecapproveddate, grade, 	score, 	id, institution_type FROM accreditation_cycle3
inner join  collegemasterdata
on  accreditation_cycle3.Institution_id = collegemasterdata.Institution_id and institution_type = 1
order by institution_id, cycle )
order by institution_id, cycle');

        return view('view-collegegrade',compact('cgradelist' ));
        }
    public function collegeec(){
        $collegeecdatafinal2018a = DB::select('SELECT * FROM public.collegeecdatafinal2018a  ORDER BY heiname ');
        $collegeecdata = DB::select('SELECT * FROM public.collegeecdata  ');
        return view('view-collegeec',compact('collegeecdatafinal2018a','collegeecdata'));
        }
    public function collegedetails(){
        $collegemasterdata = DB::select('SELECT * FROM public.collegemasterdata ORDER BY institution_id');
        $collegeecdatafinal2018a = DB::select('SELECT * FROM public.collegeecdatafinal2018a  ');
        $collegeecdata = DB::select('SELECT * FROM public.collegeecdata  ');
        $collegeedited = DB::select('SELECT * FROM public.collegeedited ');
        return view('view-collegedetails',compact('collegemasterdata','collegeecdatafinal2018a','collegeecdata','collegeedited'));
        }
    public function scoredetails(){
        $score1data = DB::select('SELECT * FROM public.assessment_back_data ORDER BY  	assessment_back_data_id,hei_id,cycle_no,assessment_date ');
//	$score1data = DB::Select('SELECT collegemasterdata.institution_name, assessment_back_data_id,assessment_back_data.hei_id,application_for,cycle_no,assessment_date,grade,score,created_at,updated_at,ec_number,gradeid,is_migrated,file_upload,	 dmsfilename from assessment_back_data
//inner join  collegemasterdata
//on  assessment_back_data.hei_id = CAST( collegemasterdata.Institution_id AS INTEGER )
//ORDER BY    hei_id,cycle_no,assessment_date');

        $score2data = DB::select('SELECT * FROM public.collegeecdatafinal2018a  ');
        $score3data = DB::select('SELECT * FROM public.collegeecdata  ');
        return view('view-scoredetails',compact('score1data','score2data','score3data'));
        }
}

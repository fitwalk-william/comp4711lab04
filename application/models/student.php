<? php namespace application/models;

use CodeIgniter\Database\ConntectionInterface;

class Student{

	public $name;
	public $id;
	
	public $gpa;
	
	public $program;
	public $term;

	public $enrolment_year;
	public $description;
	


	protected $data= [
	
	'jeff'     => ['name'=>'Jeffrey Stephen', 'id'=>'A01234567', 'gpa'=>'80','program'=>"CST",'term'=>'4',
			'enrolment_year'=>'2017','description'=>'Fortnite Fan.'],
	‘chenxi’   => [‘name’=>‘Chenxi Shao’, ‘id’=>‘BA00994992’, ‘gpa’=>‘75’, ‘program’=>‘CST’, ‘term’=>‘4’, 
			‘enrolment_year’=>‘2017’, ‘description’=>‘tech_e option’],
	'william'   => [‘name'=>'William Bradshaw’, ‘id’=>‘BA00965734’, ‘gpa’=>‘88’, ‘program’=>‘CST’, ‘term’=>‘4’, 
			‘enrolment_year’=>‘2017’, ‘description’=>‘tech_e option’]
	];
	
	
	
	public function find($id) {
		foreach($data as $student){
			if ($student.$id == $id) return $student;
		}
	}
	
	public function findAll() {
		return $data;
	}
	
	
}
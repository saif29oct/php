<?php
function countingValleys($path) {
    $hiking = new Class{
        public ?string $status = null;
        public int $hike_steps = 0;
        public  int $mountain_counts = 0;
        public int $valley_counts = 0;
    };

    $path = str_split($path);
    $path = array_reverse($path);

    return counting($hiking, $path);

}


function counting(object $hiking, array $steps): int
{
    if(empty($steps)) return $hiking->valley_counts;

    $step_type = array_pop($steps);

    if(is_null($hiking->status)){
        $hiking->status = $step_type === 'U' ? 'Mountain' : 'Valley';
    }

    $hiking->hike_steps = $step_type === 'U' ?  $hiking->hike_steps + 1 : $hiking->hike_steps - 1;

    if($hiking->hike_steps === 0){
        if($hiking->status === 'Mountain'){
            $hiking->mountain_counts = $hiking->mountain_counts + 1;
        }else{
            $hiking->valley_counts = $hiking->valley_counts + 1;
        }

        $hiking->status = null;
    }

    if(!empty($steps)) return counting($hiking, $steps);
    return $hiking->valley_counts;
}


$path = 'DDUUDDUDUUUD';

var_dump(countingValleys($path));

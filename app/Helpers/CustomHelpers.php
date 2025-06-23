<?php


function markColor($mark, $subject = '')
{
      // Subjects with distinction at 75 or more
      if (in_array($subject, ['myan', 'eng', 'science']) && $mark >= 75) {
            return 'text-purple fw-bold'; // Distinction for myan, eng, bio (75+)
      }
      // Other subjects with distinction at 80 or more
      elseif ($mark >= 80) {
            return 'text-purple fw-bold'; // Distinction for other subjects (80+)
      }
      // Pass for marks 40 or more
      elseif ($mark >= 40) {
            return 'text-success'; // Pass
      }
      // Fail for marks below 40
      else {
            return 'text-danger'; // Fail
      }
}

if (!function_exists('getResultStatus')) {
      function getResultStatus($mrc)
      {
            $marks = [
                  $mrc->myan,
                  $mrc->eng,
                  $mrc->maths,
                  $mrc->geog,
                  $mrc->hist,
                  $mrc->science,
            ];

            foreach ($marks as $mark) {
                  if ($mark < 40) {
                        return [
                              'text' => 'Fail',
                              'class' => 'text-danger fw-bold'
                        ];
                  }
            }

            return [
                  'text' => 'Pass',
                  'class' => 'text-success fw-bold'
            ];
      }
}

function totalMark($mrc)
{
      return $mrc->myan + $mrc->eng + $mrc->maths + $mrc->geog + $mrc->hist + $mrc->science;
}

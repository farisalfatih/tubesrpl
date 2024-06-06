<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Floor;
use Illuminate\Support\Facades\Auth;

class CorrectFloorController extends Controller
{
    public function submitFloor(Request $request, $id)
    {
        $floor = Floor::findOrFail($id); // Mengambil floor berdasarkan ID

        // Memilih strategi berdasarkan ID lantai
        switch ($id) {
            case 1:
                return $this->submitFloor1($request, $floor);
                break;
            case 2:
                return $this->submitFloor2($request, $floor);
                break;
            case 3:
                return $this->submitFloor3($request, $floor);
                break;
            case 4:
                return $this->submitFloor4($request, $floor);
                break;
            // Tambahkan case untuk lantai lainnya jika perlu
            default:
                abort(404); // Jika ID lantai tidak valid
        }
    }

    private function submitFloor1(Request $request, $floor)
    {
        // Jawaban yang benar
        $correctAnswers = [
            'tag1' => '!DOCTYPE html',
            'tag2' => 'html',
            'tag3' => 'head',
            'tag4' => 'title',
            'tag5' => '/title',
            'tag6' => '/head',
            'tag7' => 'body',
            'tag8' => 'h1',
            'tag9' => '/h1',
            'tag10' => 'p',
            'tag11' => '/p',
            'tag12' => '/body',
            'tag13' => '/html',
        ];

        // Menghitung total pertanyaan
        $totalQuestions = count($correctAnswers);

        // Menghitung jumlah jawaban yang benar
        $correctCount = 0;

        foreach ($correctAnswers as $key => $correctAnswer) {
            // Memeriksa jawaban dari form
            if (strtolower($request->input($key)) == strtolower($correctAnswer)) {
                $correctCount++;
            }
        }

        // Menghitung skor
        $score = ($correctCount / $totalQuestions) * 100;
        if ($score >= 70) {
            // Jika skor lebih besar atau sama dengan 70, arahkan ke lantai 2
            return redirect('floor2');
        } else {
            // Jika skor kurang dari 70, arahkan ke lantai 1
            return redirect('floor1');
        }
    }

    private function submitFloor2(Request $request, $floor)
    {
        // Jawaban yang benar
        $correctAnswers = [
            'tag1' => 'table border=1',
            'tag2' => 'thead',
            'tag3' => 'tr',
            'tag4' => 'th',
            'tag5' => '/th',
            'tag6' => 'th',
            'tag7' => '/th',
            'tag8' => 'th',
            'tag9' => '/th',
            'tag10' => 'th',
            'tag11' => '/th',
            'tag12' => '/tr',
            'tag13' => '/thead',
            'tag14' => 'tbody',
            'tag15' => 'tr',
            'tag16' => 'td',
            'tag17' => '/td',
            'tag18' => 'td',
            'tag19' => '/td',
            'tag20' => 'td',
            'tag21' => '/td',
            'tag22' => 'td',
            'tag23' => '/td',
            'tag24' => '/tr',
            'tag25' => 'tr',
            'tag26' => 'td',
            'tag27' => '/td',
            'tag28' => 'td',
            'tag29' => '/td',
            'tag30' => 'td',
            'tag31' => '/td',
            'tag32' => 'td',
            'tag33' => '/td',
            'tag34' => '/tr',
            'tag35' => '/tbody',
            'tag36' => '/table',
        ];

        // Menghitung total pertanyaan
        $totalQuestions = count($correctAnswers);

        // Menghitung jumlah jawaban yang benar
        $correctCount = 0;

        foreach ($correctAnswers as $key => $correctAnswer) {
            // Memeriksa jawaban dari form
            if (strtolower($request->input($key)) == strtolower($correctAnswer)) {
                $correctCount++;
            }
        }

        // Menghitung skor
        $score = ($correctCount / $totalQuestions) * 100;
        if ($score >= 70) {
            // Jika skor lebih besar atau sama dengan 70, arahkan ke lantai 2
            return redirect('floor3');
        } else {
            // Jika skor kurang dari 70, arahkan ke lantai 1
            return redirect('floor2');
        }
    }

    private function submitFloor3(Request $request, $floor)
    {
        // Jawaban yang benar
        $correctAnswers = [
            'tag1' => 'label',
            'tag2' => 'form',
            'tag3' => '/label',
            'tag4' => 'input type=text /',
            'tag5' => 'br /',
            'tag6' => 'label',
            'tag7' => '/label',
            'tag8' => 'input type=text /',
            'tag9' => 'br /',
            'tag10' => 'label',
            'tag11' => '/label',
            'tag12' => 'select',
            'tag13' => 'option',
            'tag14' => '/option',
            'tag15' => 'option',
            'tag16' => '/option',
            'tag17' => 'option',
            'tag18' => '/option',
            'tag19' => 'option',
            'tag20' => '/option',
            'tag21' => '/select',
            'tag22' => 'br /',
            'tag23' => 'input type=submit /',
            'tag24' => '/form',
        ];

        // Menghitung total pertanyaan
        $totalQuestions = count($correctAnswers);

        // Menghitung jumlah jawaban yang benar
        $correctCount = 0;

        foreach ($correctAnswers as $key => $correctAnswer) {
            // Memeriksa jawaban dari form
            if (strtolower($request->input($key)) == strtolower($correctAnswer)) {
                $correctCount++;
            }
        }

        // Menghitung skor
        $score = ($correctCount / $totalQuestions) * 100;
        if ($score >= 70) {
            // Jika skor lebih besar atau sama dengan 70, arahkan ke lantai 2
            return redirect('floor4');
        } else {
            // Jika skor kurang dari 70, arahkan ke lantai 1
            return redirect('floor3');
        }
    }

    private function submitFloor4(Request $request, $floor)
    {
        // Dapatkan detail user yang sedang login
        $user = Auth::user();

        // Jawaban yang benar
        $correctAnswers = [
            'tag1' => '!DOCTYPE html',
            'tag2' => 'html',
            'tag3' => 'head',
            'tag4' => 'title',
            'tag5' => '/title',
            'tag6' => '/head',
            'tag7' => 'body',
            'tag8' => 'h2',
            'tag9' => '/h2',
            'tag10' => ['table border="1"', 'table border=1', 'table border = 1', 'table border= 1'],
            'tag11' => 'thead',
            'tag12' => 'tr',
            'tag13' => 'th',
            'tag14' => '/th',
            'tag15' => 'th',
            'tag16' => '/th',
            'tag17' => 'th',
            'tag18' => '/th',
            'tag19' => 'th',
            'tag20' => '/th',
            'tag21' => '/tr',
            'tag22' => '/thead',
            'tag23' => 'tbody',
            'tag24' => 'tr',
            'tag25' => 'td',
            'tag26' => '/td',
            'tag27' => 'td',
            'tag28' => '/td',
            'tag29' => 'td',
            'tag30' => '/td',
            'tag31' => 'td',
            'tag32' => '/td',
            'tag33' => '/tr',
            'tag34' => 'tr',
            'tag35' => 'td',
            'tag36' => '/td',
            'tag37' => 'td',
            'tag38' => '/td',
            'tag39' => 'td',
            'tag40' => '/td',
            'tag41' => 'td',
            'tag42' => '/td',
            'tag43' => '/tr',
            'tag44' => '/tbody',
            'tag45' => '/table',
            'tag46' => ['br/', 'br /', 'br'],
            'tag47' => ['br/', 'br /', 'br'],
            'tag48' => 'form',
            'tag49' => 'label',
            'tag50' => '/label',
            'tag51' => ['input type="text"/', 'input type=text/', 'input type="text"'],
            'tag52' => ['br/', 'br /', 'br'],
            'tag53' => 'label',
            'tag54' => '/label',
            'tag55' => ['input type="text"/', 'input type=text/', 'input type="text"'],
            'tag56' => ['br/', 'br /', 'br'],
            'tag57' => 'label',
            'tag58' => '/label',
            'tag59' => 'select',
            'tag60' => 'option',
            'tag61' => '/option',
            'tag62' => 'option',
            'tag63' => '/option',
            'tag64' => 'option',
            'tag65' => '/option',
            'tag66' => 'option',
            'tag67' => '/option',
            'tag68' => '/select',
            'tag69' => ['br/', 'br /', 'br'],
            'tag70' => ['input type="submit"/', 'input type=submit/', 'input type="submit"'],
            'tag71' => '/form',
            'tag72' => '/body',
            'tag73' => '/html',
        ];

        // Menghitung total pertanyaan
        $totalQuestions = count($correctAnswers);

        // Menghitung jumlah jawaban yang benar
        $correctCount = 0;

        foreach ($correctAnswers as $key => $correctAnswer) {
            // Memeriksa jawaban dari form
            if (strtolower($request->input($key)) == strtolower($correctAnswer)) {
                $correctCount++;
            }
        }

        // Menghitung skor
        $score = ($correctCount / $totalQuestions) * 100;

        // Simpan skor ke database
        Score::create([
            'user_id' => $user->id,
            'name' => $user->name,
            'username' => $user->username,
            'email' => $user->email,
            'score' => $score,
        ]);

        // Kirim data skor ke tampilan
        return view('score', ['score' => $score]); 
    }

}
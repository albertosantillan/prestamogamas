<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;
use League\Csv\Writer;

class PrestamoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function all(Request $request)
    {
        $per_page = $request->input('per_page', 5);

        $data = Prestamo::devueltos($request)->paginate($per_page);

        return response()->json($data);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'fechaTentDev'=>'required'
        ],[
            'fechaTentDev.required'=>'La fecha tentativa de devolución es requerida'
        ]);
        $input = $request->input();
        
        $Prestamo = Prestamo::create($request->input());

        return response()->json($Prestamo);
    }

    public function update(Request $request, $id)
    {
        $prestamo = Prestamo::FindOrFail($id);
        $prestamo->update($request->input());
        return response()->json([
            'message'=>'prestamo actualizado',
            'prestamo'=> $prestamo
        ]);
    }

    public function pdf()
    {
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->SetWatermarkText('entregado');
        $mpdf->showWatermarkText = true;
        $mpdf->WriteHTML('<table class="tg" width="100%">
        <thead>
          <tr>
            <th class="tg-0lax">1</th>
            <th class="tg-0lax">2</th>
            <th class="tg-0lax">3</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="tg-0lax">4</td>
            <td class="tg-0lax">5</td>
            <td class="tg-0lax" style="color: red;">6</td>
          </tr>
          <tr>
            <td class="tg-0lax">7</td>
            <td class="tg-0lax">8</td>
            <td class="tg-0lax">9</td>
          </tr>
        </tbody>
        </table>');
        
        return $mpdf->Output('lalo.pdf', 'I');
    }

    public function csv()
    {
        $header = ['nombre campo', 'campo2', 'campo3'];
        $records = [
            [1, 2, 3],
            ['foo', 'bar', 'baz'],
            ['john', 'doe', 'john.doe@example.com'],
            ['lalo', 'cespedes', 'lalo.doe@example.com'],
        ];

        //load the CSV document from a string
        $csv = Writer::createFromString();

        //insert the header
        $csv->insertOne($header);

        //insert all the records
        $csv->insertAll($records);

        $csv->output('lalo.csv');

    }
}

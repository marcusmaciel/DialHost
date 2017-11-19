<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//chama extensão cCURL

use Ixudra\Curl\Facades\Curl;

//chamar o Model
use App\Leads;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Lista os leads
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Criar o lead 
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
           return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $dados = $request->all();
            //$lead = Leads::create($dados);
            if($dados){
                 $cep = $request->input('cep');
     
                 $appKey = 'arMWXiXJZUi3vyUzQUD5jf4XZocpVtEj';
                 $appSecret = 'f0j3wVEsEWCNxAWZMpb310bnTlJnlBv7N3MKChKZtW1DTNIN';
                 $buscaCep = Curl::to('https://webmaniabr.com/api/1/cep/'.$cep.'?app_key=' . $appKey . '&app_secret=' . $appSecret)
                 ->post();
                 //$buscaCep = Curl::to('https://webmaniabr.com/api/1/cep/')->get();
                  
                  $obj = json_decode($buscaCep); 
                  $dados['endereco'] = $obj->endereco;
                  $dados['cidade'] = $obj->cidade;
                  $dados['uf'] = $obj->uf;
                  $dados['bairro'] = $obj->bairro;
     
                  $lead = new Leads();
                  $lead->nome = $request->nome;
                  $lead->email = $request->email;
                  $lead->telefone = $request->telefone;
                  $lead->nascimento = date("Y-m-d", strtotime($request->nascimento));
                  $lead->cep = $request->cep;
                  $lead->numero = $request->numero;
                  $lead->endereco = $obj->endereco;
                  $lead->cidade = $obj->cidade;
                  $lead->uf = $obj->uf;
                  $lead->bairro = $obj->bairro;
                  $lead->save();
                  if($lead){
                     return response()->json(['data'=>$lead, 'status'=>true]);
                  }else{
                     return response()->json(['data'=>'Falha ao cadastrar Lead', 'status'=>false]);
                  }
            }else{
                return false;
            }
        }
    }
}

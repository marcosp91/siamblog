<?php

namespace App\Http\Controllers;

use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;
use Illuminate\Http\Request;
use function redirect;
use function view;


class FormCaptionController extends Controller
{

	private  $apiUserId;
    private  $apiKeySecret;
    // private  $apiPath;

    public function __construct()
    {
        $this->apiUserId = '16917303bbecae7ab97c09530f16eb0a';
        $this->apiKeySecret = 'e3ed5b866a071a2a7bfef4a0a3053585';
    }

	public function insereContato(Request $request)
	{
		$validatedData = $request->validate([
	        'email' => 'required|email|max:155',
	        'nome' => 'max:105',
	        'mensagem' => 'max:255',
	    ]);

		$dadosForm = $request->all();
		$contatoLead = $dadosForm;
		

		if(!empty($contatoLead)){	

			$contatoLead = $request->input('l1');
			
			$SPApiClient = new ApiClient($this->apiUserId, $this->apiKeySecret, new FileStorage());
			if(!empty($contatoLead)){

				$bookID = 1880385;
				$dados = array(
				    array(
					        'email' => $contatoLead = $request->input('email'),
					        'variables' => array(
					            'Nome' => '',
					            'Preferencias' => '',
					        )
					)
				);

				$SPApiClient->addEmails($bookID, $dados);

				return redirect()->back()->with('mensagemSucesso', 'Enviamos um cupom de desconto para seu e-mail.');
			}
			else {

				$bookID = 1880385;
				$dados = array(
				    array(
					        'email' => $contatoLead = $request->input('email'),
					        'variables' => array(
					            'nome' => $contatoLead = $request->input('nome'),
					            'Preferencias' => $contatoLead = $request->input('mensagem'),
					        )
					)
				);

				$SPApiClient->addEmails($bookID, $dados);
				return redirect()->back()->with('mensagemSucesso', 'Enviamos um cupom de desconto para seu e-mail.');          
        	}
			
		}
		else {

        	return redirect()->back()->with('mensagemErro', 'Preencha seus dados corretamente.');
        }

	}
    
}

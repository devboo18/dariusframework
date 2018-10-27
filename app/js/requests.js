
class R {

	constructor(){
		/*TODO:Inicializar o server recebendo um parametro via INIT*/
		this.server ='http://localhost:8080/requests/';
	}

	action(action){
		this.reqaction = action;
		return this;
	}

	get (reqdata) {

		if(this.reqaction == 'undefined'){
			return false;
		}

		reqdata = (typeof reqdata !== 'undefined')?reqdata:{};

		var reqaction = this.reqaction.split('/');
		

		var data = Object.keys(reqdata).map(function(k){
			return encodeURIComponent(k) + '=' + encodeURIComponent(reqdata[k])
		}).join('&');
	
		
	
		var url = this.server+reqaction[0]+'/'+reqaction[1];
	
		return new Promise(function(resolve, reject) {
			// Do the usual XHR stuff
			var req = new XMLHttpRequest();
	
			req.open('POST', url,true);
			req.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
			req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	
			req.onload = function() {
				// This is called even on 404 etc
				// so check the status
				if (req.status == 200) {
					// Resolve the promise with the response text
					resolve(req.response);
				}
				else {
					// Otherwise reject with the status text
					// which will hopefully be a meaningful error
					reject(Error(req.statusText));
				}
			 };
	  
			// Handle network errors
			req.onerror = function() {
				reject(Error("Network Error"));
			};
			
			// Make the request
			req.send(data);
		});
	}

}

var Xr  = new R();//Enviar server aqui -- TODO


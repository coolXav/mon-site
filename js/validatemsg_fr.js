var validateFormMessage = {
    name: { 
    	required :"***** Votre nom est obligatoire *****",
   		lettersonly : "***** Votre nom ne peut pas contenir de chiffres *****",
		minlength : "***** Votre nom ne peut contenir moins de 2 lettres *****"
   },    
    email: {
      required: "***** Votre courriel est obligatoire *****",
      email: "***** Votre courriel doit être du format : nom@domaine.com *****"
    },
    object: {
    	required: "***** L'objet est obligatoire *****"
    	},
    message: {
    	required: "***** Le message ne peut être vide *****"
    	}
 };
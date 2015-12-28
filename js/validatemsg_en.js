var validateFormMessage = {
    name: { 
    	required :"***** Your name is required *****",
   		lettersonly : "***** Your name cannot have numbers *****",
		minlength : "***** Your name must be a least 2 characters *****"
   },    
    email: {
      required: "***** Your email is required *****",
      email: "***** Your email address must be in the format of name@domain.com *****"
    },
    object: {
    	required: "***** The subject is required *****"
    	},
    message: {
    	required: "***** The message cannot be empty *****"
    	}
 };
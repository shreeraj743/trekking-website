const validation = new JustValidate("#form");

validation
    .addField("#name", [
        {
            rule: "required"
        }
    ])
    .addField("#email", [
        {
            rule: "required"
        },
        {
            rule: "email"
        },
     
    ])
    .addField("#password", [
        {
            rule: "required"
        },
        {
            rule: "password"
        }
    ])
    // .addField("#password_confirmation", [
    //     {
    //         validator: (value, fields) => {
    //             return value === fields["#password"].elem.value;
    //         },
    //         errorMessage: "Passwords should match"
    //     }
    // ])
    .onSuccess((event) => {
        document.getElementById("form").submit();
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
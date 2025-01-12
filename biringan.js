const programs = document.getElementById('programs');
const about = document.getElementById('about');
const teachersPortal = document.getElementById('teachersPortal');
const loginUsername = document.getElementById('login');
const registerUsername = document.getElementById('register');

let i = 0, i1 = 0, i2 = 0;

programs.addEventListener('click', () => {
    biringan.style="opacity : 0.3";
    divProgram.style="display : block";
    first.style="display : block";
    second.style="display : block";
    third.style="display : block";
    fourth.style="display : block";
    divProgram.style="display : block";

    i++;
    if(i === 2 ){
        biringan.style="opacity : 1";
        divProgram.style="display : none";
        first.style="display : none";
        second.style="display : none";
        third.style="display : none";
        fourth.style="display : none";
        divProgram.style="display : none";
        panel.style="display : block"; 
        panel1.style="display : none";
        panel2.style="display : none";
        panel3.style="display : none";
        jobOp.style="display : none";
        i = 0;
    }
    //Teachers Portal
    if(login.style.display === "block"){
        login.style="display : none";
    }
    if(register.style.display === "block"){
        register.style="display : none";
    }
    if(usernameLabel.style.display === "block"){
        usernameLabel.style="display : none";
    }
    if(enterUsername.style.display === "block"){
        enterUsername.style="display : none";
    }
    if(passwordLabel.style.display === "block"){
        passwordLabel.style="display : none";
    }
    if(enterPassword.style.display === "block"){
        enterPassword.style="display : none";
    }
    if(enter.style.display === "block"){
        enter.style="display : none";
    }

    
    if(enterNameLabel.style.display === "block"){
        enterNameLabel.style="display : none";
    }
    if(enterName.style.display === "block"){
        enterName.style="display : none";
    }
    if(enterMiddleNameLabel.style.display === "block"){
        enterMiddleNameLabel.style="display : none";
    }
    if(enterMiddleName.style.display === "block"){
        enterMiddleName.style="display : none";
    }
    if(enterLastNameLabel.style.display === "block"){
        enterLastNameLabel.style="display : none";
    }
    if(enterLastName.style.display === "block"){
        enterLastName.style="display : none";
    }
    if(enterUserIDLabel.style.display === "block"){
        enterUserIDLabel.style="display : none";
    }
    if(enterUserID.style.display === "block"){
        enterUserID.style="display : none";
    }
    if(createUsernameLabel.style.display === "block"){
        createUsernameLabel.style="display : none";
    }
    if(createUsername.style.display === "block"){
        createUsername.style="display : none";
    }
    if(create.style.display === "block"){
        create.style="display : none";
    }

    //About
    if(description.style.display === "block"){
        description.style="display : none";
    }
    if(back.style.display === "block"){
        back.style="display : none";
    }
    if(panel.style.dispaly === "none"){
        panel.style="display : block";
    }

    if(i1 === 1){
        i1 = 0;
    }

    if(i2 === 1){
        i2 = 0;
    }

});

teachersPortal.addEventListener('click', () => {
    biringan.style="opacity : 0.3";
    login.style="display : block";
    register.style="display : block";
    i1++;
    
    if(i1 === 2){
        biringan.style="opacity : 1";
        login.style="display : none";
        register.style="display : none";
        i1 = 0;
    }

    if(enterNameLabel.style.display === "block"){
        enterNameLabel.style="display : none";
    }
    if(enterName.style.display === "block"){
        enterName.style="display : none";
    }
    if(enterMiddleNameLabel.style.display === "block"){
        enterMiddleNameLabel.style="display : none";
    }
    if(enterMiddleName.style.display === "block"){
        enterMiddleName.style="display : none";
    }
    if(enterLastNameLabel.style.display === "block"){
        enterLastNameLabel.style="display : none";
    }
    if(enterLastName.style.display === "block"){
        enterLastName.style="display : none";
    }
    if(enterUserIDLabel.style.display === "block"){
        enterUserIDLabel.style="display : none";
    }
    if(enterUserID.style.display === "block"){
        enterUserID.style="display : none";
    }
    if(createUsernameLabel.style.display === "block"){
        createUsernameLabel.style="display : none";
    }
    if(createUsername.style.display === "block"){
        createUsername.style="display : none";
    }
    if(create.style.display === "block"){
        create.style="display : none";
    }


    if(usernameLabel.style.display === "block"){
        usernameLabel.style="display : none";
    }
    if(enterUsername.style.display === "block"){
        enterUsername.style="display : none";
    }
    if(passwordLabel.style.display === "block"){
        passwordLabel.style="dispaly : none";
    }
    if(enterPassword.style.display === "block"){
        enterPassword.style="display : none";
    }
    if(enter.style.display === "block"){
        enter.style="display : none";
    }

    //Program
    if(divProgram.style.display === "block"){
        divProgram.style="display : none";
    }
    if(first.style.display  === "block"){
        first.style="display : none";
    }
    if(second.style.display === "block"){
        second.style="display : none";
    }
    if(third.style.display === "block"){
        third.style="display : none";
    }
    if(fourth.style.display === "block"){
        fourth.style="display : none";
    }

    //About
    if(description.style.display === "block"){
        description.style="display : none";
    }
    if(back.style.display === "block"){ 
        back.style="display : none";
    }

    if(i === 1){
        i = 0;
    }

    if(i2 === 1){
        i2 = 0;
    }

    if(panel.style.display === "none"){
        panel.style="display : block";
    }
    if(panel1.style.display === "block"){
        panel1.style="display : none";
    }
    
    if(panel2.style.display === "block"){
        panel2.style="display : none";
    }
    
    if(panel3.style.display === "block"){
        panel3.style="display : none";
    }
    
    if(jobOp.style.display === "block"){
        jobOp.style="display : none";
    }

    
});

about.addEventListener('click', () =>{
    biringan.style="display : none";
    description.style="display : block";
    back.style="dispaly : none";

    i2++;
    if(i2 === 2){
        biringan.style="display : block";
        description.style="display : none";
        i2 = 0;
    }

       
    if(i1 === 2){
        biringan.style="opacity : 1";
        login.style="display : none";
        register.style="display : none";
        i1 = 0;
    }

    //Programs
    if(divProgram.style.display === "block"){
        divProgram.style="display : none";
    }
    if(first.style.display  === "block"){
        first.style="display : none";
    }
    if(second.style.display === "block"){
        second.style="display : none";
    }
    if(third.style.display === "block"){
        third.style="display : none";
    }
    if(fourth.style.display === "block"){
        fourth.style="display : none";
    }

    //Teachers Portal
    if(login.style.display === "block"){
        login.style="display : none";
    }
    if(register.style.display === "block"){
        register.style="display : none";
    }
    if(usernameLabel.style.display === "block"){
        usernameLabel.style="display : none";
    }
    if(enterUsername.style.display === "block"){
        enterUsername.style="display : none";
    }
    if(passwordLabel.style.display === "block"){
        passwordLabel.style="display : none";
    }
    if(enterPassword.style.display === "block"){
        enterPassword.style="display : none";
    }
    if(enter.style.display === "block"){
        enter.style="display : none";
    }


    
    if(enterNameLabel.style.display === "block"){
        enterNameLabel.style="display : none";
    }
    if(enterName.style.display === "block"){
        enterName.style="display : none";
    }
    if(enterMiddleNameLabel.style.display === "block"){
        enterMiddleNameLabel.style="display : none";
    }
    if(enterMiddleName.style.display === "block"){
        enterMiddleName.style="display : none";
    }
    if(enterLastNameLabel.style.display === "block"){
        enterLastNameLabel.style="display : none";
    }
    if(enterLastName.style.display === "block"){
        enterLastName.style="display : none";
    }
    if(enterUserIDLabel.style.display === "block"){
        enterUserIDLabel.style="display : none";
    }
    if(enterUserID.style.display === "block"){
        enterUserID.style="display : none";
    }
    if(createUsernameLabel.style.display === "block"){
        createUsernameLabel.style="display : none";
    }
    if(createUsername.style.display === "block"){
        createUsername.style="display : none";
    }
    if(create.style.display === "block"){
        create.style="display : none";
    }

    
    if(i === 1){
        i = 0;
    }

    if(i1 === 1){
        i1 = 0;
    }

    if(panel.style.display === "none"){
        panel.style="display : block";
    }
    if(panel1.style.display === "block"){
        panel1.style="display : none";
    }
    
    if(panel2.style.display === "block"){
        panel2.style="display : none";
    }
    
    if(panel3.style.display === "block"){
        panel3.style="display : none";
    }
    
    if(jobOp.style.display === "block"){
        jobOp.style="display : none";
    }
});

enroll.addEventListener('click', () => {

});

proceed.addEventListener('click', () => {
    panel.style = "display : none";
    panel1.style="display : block";
    panel2.style="display : block";
    panel3.style="display : block";
    back.style="display : block";
    jobOp.style="display : block";
});

back.addEventListener('click', () => {
    panel.style="display : block";
    panel1.style="display : none";
    panel2.style="display : none";
    panel3.style="display : none";
    back.style="display : none";
    jobOp.style="display : none";
});
let loginInt = 0;
loginUsername.addEventListener('click', () => {
    usernameLabel.style="display : block;";
    enterUsername.style="display : block";
    passwordLabel.style="display : block";
    enterPassword.style="display : block";
    enter.style="display : block";

    loginInt++;

    if(loginInt === 2){
        usernameLabel.style="display : none;";
        enterUsername.style="display : none";
        passwordLabel.style="display : none";
        enterPassword.style="display : none";
        enter.style="display : none";
        loginInt = 0;
    }

    if(enterNameLabel.style.display === "block"){
        enterNameLabel.style="display : none";
    }
    if(enterName.style.display === "block"){
        enterName.style="display : none";
    }
    if(enterMiddleNameLabel.style.display === "block"){
        enterMiddleNameLabel.style="display : none";
    }
    if(enterMiddleName.style.display === "block"){
        enterMiddleName.style="display : none";
    }
    if(enterLastNameLabel.style.display === "block"){
        enterLastNameLabel.style="display : none";
    }
    if(enterLastName.style.display === "block"){
        enterLastName.style="display : none";
    }
    if(enterUserIDLabel.style.display === "block"){
        enterUserIDLabel.style="display : none";
    }
    if(enterUserID.style.display === "block"){
        enterUserID.style="display : none";
    }
    if(createUsernameLabel.style.display === "block"){
        createUsernameLabel.style="display : none";
    }
    if(createUsername.style.display === "block"){
        createUsername.style="display : none";
    }
    if(create.style.display === "block"){
        create.style="display : none";
    }

    if(registerInt === 1){
        registerInt = 0;
    }
});
let registerInt = 0;
registerUsername.addEventListener('click', () =>{
    enterNameLabel.style="display : block";
    enterName.style="display : block";
    enterMiddleNameLabel.style="display : block";
    enterMiddleName.style="display : block";
    enterLastNameLabel.style="display : block";
    enterLastName.style="display : block";
    enterUserIDLabel.style="display : block";
    enterUserID.style="display : block";
    createUsernameLabel.style="display : block";
    createUsername.style="display : block"; 
    create.style="display : block";
    registerInt++;

    if(registerInt === 2){
        enterNameLabel.style="display : none";
        enterName.style="display : none";
        enterMiddleNameLabel.style="display : none";
        enterMiddleName.style="display : none";
        enterLastNameLabel.style="display : none";
        enterLastName.style="display : none";
        enterUserIDLabel.style="display : none";
        enterUserID.style="display : none";
        createUsernameLabel.style="display : none";
        createUsername.style="display : none"; 
        create.style="display : none";
        registerInt = 0;
    }
    if(usernameLabel.style.display === "block"){
        usernameLabel.style="display : none";
    }
    if(enterUsername.style.display === "block"){
        enterUsername.style="display : none";
    }
    if(passwordLabel.style.display === "block"){
        passwordLabel.style="dispaly : none";
    }
    if(enterPassword.style.display === "block"){
        enterPassword.style="display : none";
    }
    if(enter.style.display === "block"){
        enter.style="display : none";
    }

    if(loginInt === 1){
        loginInt = 0;
    }
    
});

function Instagram() {
    window.open("https://www.instagram.com/girlyver_/", "_blank");
}
function Facebook() {
    window.open("https://www.facebook.com/gvjandayan12", "_blank");
}
const postIcon = document.getElementById('Button');
postIcon.addEventListener("click", handleButtonClick);

const postIcon2 = document.getElementById('myButton2');
postIcon2.addEventListener("click", handleButtonClick2);

const postIcon3 = document.getElementById('myButton3');
postIcon3.addEventListener("click", handleButtonClick3);

const postIcon4 = document.getElementById('myButton4');
postIcon4.addEventListener("click", handleButtonClick4);

async function handleButtonClick(e){
    const bere_bodovi = prompt('Unesi bodove od Bere:', 0);
    if(bere_bodovi == null)
    {return;}
    const tonći_bodovi = prompt('Unesi bodove od Tonći:', 0);
    if(tonći_bodovi == null)
    {return;}
    const muni_bodovi = prompt('Unesi bodove od Muni:', 0);
    if(muni_bodovi == null)
    {return;}
    const biuk_bodovi = prompt('Unesi bodove od Biuk:', 0);
    if(biuk_bodovi == null)
    {return;}
    const ciko_bodovi = prompt('Unesi bodove od Ciko:', 0);
    if(ciko_bodovi == null)
    {return;}

    try {
        const serverResponse = await fetch(`API.php?action=NewScore&bere_bodovi=${bere_bodovi}&tonći_bodovi=${tonći_bodovi}&muni_bodovi=${muni_bodovi}&biuk_bodovi=${biuk_bodovi}&ciko_bodovi=${ciko_bodovi}`);
        const responseData = await serverResponse.json();

        if(!responseData.success){
            throw new Error(`Error while commenting post: ${responseData.reason}`)
        }
        else{
            window.location.reload();
        }
    }catch(error) {
        throw new Error(error.message || error)
    }

}

async function handleButtonClick2(e){
    const bere_bodovi = prompt('Unesi kuće od Bere:', 0);
    if(bere_bodovi == null)
    {return;}
    const tonći_bodovi = prompt('Unesi kuće od Tonći:', 0);
    if(tonći_bodovi == null)
    {return;}
    const muni_bodovi = prompt('Unesi kuće od Muni:', 0);
    if(muni_bodovi == null)
    {return;}
    const biuk_bodovi = prompt('Unesi kuće od Biuk:', 0);
    if(biuk_bodovi == null)
    {return;}
    const ciko_bodovi = prompt('Unesi kuće od Ciko:', 0);
    if(ciko_bodovi == null)
    {return;}

    try {
        const serverResponse = await fetch(`API.php?action=NewKuća&bere_bodovi=${bere_bodovi}&tonći_bodovi=${tonći_bodovi}&muni_bodovi=${muni_bodovi}&biuk_bodovi=${biuk_bodovi}&ciko_bodovi=${ciko_bodovi}`);
        const responseData = await serverResponse.json();

        if(!responseData.success){
            throw new Error(`Error while commenting post: ${responseData.reason}`)
        }
        else{
            window.location.reload();
        }
    }catch(error) {
        throw new Error(error.message || error)
    }

}


async function handleButtonClick3(e){
    try {
        const serverResponse = await fetch(`API.php?action=NewKuća_Svima`);
        const responseData = await serverResponse.json();

        if(!responseData.success){
            throw new Error(`Error while commenting post: ${responseData.reason}`)
        }
        else{
            window.location.reload();
        }
    }catch(error) {
        throw new Error(error.message || error)
    }

}

async function handleButtonClick4(e){
    const potvrda = confirm('Želiš li završiti sezonu?');
    console.log(potvrda);
    if(!potvrda) {
        throw new Error('Sezona nije završena.');
    }


    try {
        const serverResponse = await fetch(`API.php?action=NewSeason`);
        const responseData = await serverResponse.json();

        if(!responseData.success){
            throw new Error(`Error while ending season: ${responseData.reason}`)
        }
        else{
            window.location.reload();
        }
    }catch(error) {
        throw new Error(error.message || error)
    }

}

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
/*Funcion */
const getRemainTime = deadline => {
    let now = new Date(),
    remainTime = (new Date(deadline) - now +1000 ) / 1000,
    remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
    remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
    remainHours = ('0' + Math.floor(remainTime / 3600 % 24)).slice(-2),
    remainDays = Math.floor(remainTime / (3600*24));

/*retornar los valores*/

    return{
        remainTime,
        remainSeconds,
        remainMinutes,
        remainHours,
        remainDays,
    }
};

/*parametros*/

const countdown = (deadline, elem, finalMessage) => {
    const el = document.getElementById(elem);
    /***actualizar cada segundo ****/
    const timerUpdate = setInterval( () => {
        let t = getRemainTime(deadline);
    /**imprimirlo en html */
    el.innerHTML = `${t.remainDays}Days:${t.remainHours}Hrs:${t.remainMinutes}Mn:${t.remainSeconds}Sc`
    /*deterner el tiempo**/
    if (t.remainTime <= 1 ) {
        clearInterval(timeUpdate);
        el.innerHTML = finalMessage;
    }
 }, 1000)
};

 countdown ('Apr 14 2018 10:17:34 GMT-0500', 'clock', 'Bowwmm' );
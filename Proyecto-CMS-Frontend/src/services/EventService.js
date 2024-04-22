import axios from "axios"

export default{
    async getEvents(){
        let res = await axios.get("http://localhost:8000/usuario");
        return res.data;
    },
    async getEventSingle(eventId){
        let res = await axios("http://localhost:8000/usuario/" + eventId);
        return res.data;
    }
}


// esto es lo último que hemos añadido ||-_-||
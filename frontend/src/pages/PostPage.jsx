import axios from "axios";
import { useStae, useEffect } from "react";
import { useParams } from "react-router-dom";

export default function PostPage() {

    const apiURL = import.meta.env.VITE_API_URL;
    const endpoint = "post/";
    const { id } = useParams();
    console.log(id);

    useEffect(() => { fetchPost(), [id] });

    const fetchPost = () => {
        axios.get(apiURL + endpoint + id).then((res) => {
            console.log(res.data);
        }).catch((err) => {
            console.log(err);
        })
    }


    return (
        "ciao"


    )
}
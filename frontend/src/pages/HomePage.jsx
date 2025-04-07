import axios from "axios";
import { useStae, useEffect } from "react";

export default function HomePage() {

    // const apiURL = import.meta.env.VITE_API_URL;
    // const endpoint = "posts";

    // useEffect(() => { fetchPosts(), [] });

    // const fetchPosts = () => {
    //     axios.get(apiURL + endpoint).then((res) => {
    //         console.log(res.data);
    //     }).catch((err) => {

    //         console.log(err);

    //     }).finally(() => {
    //         console.log("Chiamata effettuata");
    //     });
    // };
    return (
        <div>
            <h1>HomePage</h1>
        </div>
    )
}
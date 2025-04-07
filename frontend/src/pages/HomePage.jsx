import axios from "axios";
import { useState, useEffect } from "react";
import { useGlobalContext } from "../contexts/GlobalContext";
import { Link } from "react-router-dom";
import Loader from "../components/Loader";
import Card from "../components/Card";

export default function HomePage() {

    // Dichiarazione variabili

    const { projects, fetchProjects, isLoading } = useGlobalContext();

    // Dichiarazione funzioni

    useEffect(() => { fetchProjects() }, []);

    return (
        <section id="projects" className="py-5 bg-light">
            {isLoading && <Loader />}
            <div className="container">
                <h2 className="text-center mb-4">I Miei Progetti</h2>
                <div className="row">
                    {projects?.map((project) => {
                        return (
                            <Card data={project} key={project.id} />
                        )
                    })}
                </div>
            </div>
        </section>

    )
}
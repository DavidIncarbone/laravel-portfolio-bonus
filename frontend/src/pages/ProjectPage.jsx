import axios from "axios";
import { useState, useEffect } from "react";
import { useParams } from "react-router-dom";
import styles from '../style/projectDetails.module.css';
import { useGlobalContext } from "../contexts/GlobalContext";
import Loader from "../components/Loader";

export default function ProjectPage() {

    // Dichiaro le variabili

    const { project, fetchProject, isLoading } = useGlobalContext();
    const { id } = useParams();
    console.log(id);

    // Dichiaro le funzioni

    useEffect(() => { fetchProject(id) }, [id]);


    return (
        <section className={`py-5 ${styles.projectSection}`}>
            {isLoading ? <Loader /> :
                <div className="container">
                    <div className="row">
                        <div className="col-md-8">
                            <h1 className={styles.projectTitle}>{project.name}</h1>
                            <div id="projectImages" className={`carousel slide ${styles.carousel}`} data-bs-ride="carousel">
                                <div className="carousel-inner">
                                    <div className="carousel-item active">
                                        <img src="progetto1-dettaglio.jpg" className="d-block w-100" alt={project.name} />
                                    </div>
                                </div>
                                <button className="carousel-control-prev" type="button" data-bs-target="#projectImages" data-bs-slide="prev">
                                    <span className="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span className="visually-hidden">Previous</span>
                                </button>
                                <button className="carousel-control-next" type="button" data-bs-target="#projectImages" data-bs-slide="next">
                                    <span className="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span className="visually-hidden">Next</span>
                                </button>
                            </div>
                            <h3 className="mt-4">Descrizione del Progetto</h3>
                            <p>{project.summary}</p>

                            <h4 className="mt-4">Tecnologie Usate</h4>
                            <ul className={styles.techList}>
                                {project.technologies?.map((technology) => {
                                    return (<li className="badge m-1"
                                        style={{ backgroundColor: `${technology.color}` }} key={technology.id}>
                                        {technology.name}</li>
                                    )
                                })}

                            </ul>

                            <a href={project.link} className={`btn btn-primary mt-4 ${styles.projectButton}`}>Visita il Progetto</a>
                        </div>


                    </div>
                </div>
            }
        </section >
    )
}
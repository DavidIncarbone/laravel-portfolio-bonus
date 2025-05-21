import axios from "axios";
import { useState, useEffect } from "react";
import { useGlobalContext } from "../contexts/GlobalContext";
import { Link } from "react-router-dom";
import Loader from "../components/Loader";
import Card from "../components/Card";

export default function HomePage() {
  // Dichiarazione variabili

  const { projects, fetchProjects, isLoading, fileUrl } = useGlobalContext();

  // Dichiarazione funzioni

  useEffect(() => {
    fetchProjects();
  }, []);

  return (
    <section id="projects" className="py-3 bg-light">
      <div className="container">
        <h2 className="text-center mb-4">I Miei Progetti</h2>
        {isLoading ? (
          <Loader />
        ) : (
          <div className="row">
            {projects?.map((project) => {
              return <Card data={project} fileUrl={fileUrl} key={project.id} />;
            })}
          </div>
        )}
      </div>
    </section>
  );
}

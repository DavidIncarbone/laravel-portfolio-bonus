import { Link } from "react-router-dom";

export default function Card({ data }) {
    return (
        <div className="col-md-4 mb-4 overflow-y-hidden" >
            <div className="card shadow " style={{ height: "300px" }} >
                <img src="progetto1.jpg" className="card-img-top" alt={data.name} />
                <div className="card-body">
                    <h5 className="card-title">{data.name}</h5>
                    <p className="card-text overflow-y-auto" style={{ height: "100px" }}>{data.summary.length <= 200 ? data.summary : data.summary.substring(0, 200) + "..."}</p>
                    <Link className="btn btn-primary mb-0" to={`/project/${data.id}`}>Dettagli</Link>
                </div>
            </div>
        </div>
    )
}
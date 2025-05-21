import { Link } from "react-router-dom";

export default function Card({ data, fileUrl }) {
  return (
    <div className="col-md-4 mb-4">
      <div className="card shadow" style={{ height: "50vh" }}>
        <div className="h-50">
          <img
            src={`${fileUrl}${data.image}`}
            className="card-img-top overflow-y-hidden"
            alt={data.name}
          />
        </div>
        <div className="card-body mt-3 d-flex flex-column justify-content-between align-items-start">
          <h5 className="card-title">{data.name}</h5>
          <p className="card-text">
            {data.summary.length <= 80
              ? data.summary
              : data.summary.substring(0, 80) + "..."}
          </p>
          <Link className="btn btn-dark mb-0" to={`/project/${data.id}`}>
            Dettagli
          </Link>
        </div>
      </div>
    </div>
  );
}

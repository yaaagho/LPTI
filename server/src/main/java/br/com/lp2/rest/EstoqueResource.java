package br.com.lp2.rest;


import java.util.List;

import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

import org.springframework.data.domain.Sort;
import org.springframework.data.domain.Sort.Direction;
import org.springframework.data.domain.Sort.Order;

import br.com.lp2.spring.mongo.Estoque;
import br.com.lp2.spring.mongo.EstoqueService;
import br.com.lp2.spring.mongo.Response;

@Path("/registroEstoque")
@Produces(MediaType.APPLICATION_JSON + ";charset=utf-8")
@Consumes(MediaType.APPLICATION_JSON + ";charset=utf-8")

public class EstoqueResource {

	EstoqueService service = new EstoqueService();
	
	@GET
	@Path("/dataRegistro")
	public List<Estoque> getAllByDataRegistro() {
		return service.findAll(new Sort(new Order(Direction.DESC, "dataRegistro")));
	}
	
	@GET
	@Path("/tipo/{tipo}")
	public List<Estoque> getByTipo(@PathParam("tipo") boolean tipo) {
		return service.findByTipo(tipo);
	}
	
	@GET
	@Path("/data/{data}")
	public List<Estoque> getByData(@PathParam("data") String data) {
		return service.findByData(data);
	}

	
	@DELETE
	@Path("/{id}")
	public void delete(@PathParam("id") String id){
		service.deleteById(id);	
	}
	
	@POST
	public Response post(Estoque estoque){
		service.save(estoque);
		return Response.Ok("Salvo com sucesso!");
	}
	
	@PUT
	public void put(Estoque estoque) {
		service.save(estoque);
	}

}
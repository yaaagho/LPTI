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

import br.com.lp2.spring.mongo.Response;
import br.com.lp2.spring.mongo.Usuario;
import br.com.lp2.spring.mongo.UsuarioService;

@Path("/usuario")
@Produces(MediaType.APPLICATION_JSON + ";charset=utf-8")
@Consumes(MediaType.APPLICATION_JSON + ";charset=utf-8")

public class UsuarioResource {

	UsuarioService service = new UsuarioService();
	
	@GET
	@Path("/nome")
	public List<Usuario> getAllByNome() {
		return service.findAll(new Sort(new Order(Direction.ASC, "nome")));
	}
	
	@GET
	@Path("/nome/{nome}")
	public List<Usuario> getByNome(@PathParam("nome") String nome) {
		return service.findByNome(nome);
	}
	
	@DELETE
	@Path("/{id}")
	public void delete(@PathParam("id") String id){
		service.deleteById(id);	
	}
	
	@POST
	public Response post(Usuario usuario){
		service.save(usuario);
		return Response.Ok("Salvo com sucesso!");
	}
	
	@PUT
	public void put(Usuario usuario) {
		service.save(usuario);
	}

}
import { prismaClient } from '../../database/client.js'

export class GetAllCidadeController {


    async handle(request, response) {

        const cidades = await prismaClient.cidade.findMany({
            select: {
                id: true,
                nome: true,
                created_at:true,
                estado: true
            }
        });

        return response.json(cidades);

    }

}
<template>
 <div class="grid grid-cols-3 gap-6">
  <center>
    <h1 class="text-3xl font-bold underline py-4">RANKING DE ALUMNOS</h1>
    <table class="table-auto">
      <thead>
        <tr>
          <th class="px-4 py-2">NOMBRE</th>
          <th class="px-4 py-2">PERFIL</th>
          <th class="px-4 py-2">PUNTAJE</th>
          <th class="px-4 py-2">OPCIONES</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="alumno in alumnosAll" :key="alumno.id" class="bg-gray-100">
          <td class="border px-4 py-2">{{ alumno.fullname }}</td>
          <td class="border px-4 py-2">{{ alumno.perfil.nombre_perfil }}</td>
          <td class="border px-4 py-2">50</td>
          <td class="border px-4 py-2">
            <button
             @click="listarCursos(alumno.id, alumno.perfil_id)"
              class="
                bg-blue-500
                hover:bg-blue-700
                text-white
                font-bold
                py-1
                px-4
                rounded
              "
            >
              Detalles
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </center>
  <center>
    <h1 class="text-3xl font-bold underline py-4">LISTA DE CURSOS</h1>
    <table class="table-auto">
      <thead>
        <tr>
          <th class="px-4 py-2">CURSO</th>
          <th class="px-4 py-2">FECHA</th>
          <th class="px-4 py-2">APROBADO</th>
          <th class="px-4 py-2">OPCIONES</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="cursos in cursosAll" :key="cursos.id" class="bg-gray-100">
            <td class="border px-4 py-2">{{ cursos.nombre_curso }}</td>
            <td class="border px-4 py-2"> {{ cursos.fecha }}</td>
            <td class="border px-4 py-2">Si</td>
            <button
             @click="listarTemas(cursos.alumno_id, cursos.curso_id)"
              class="
                bg-blue-500
                hover:bg-blue-700
                text-white
                font-bold
                py-1
                px-2
                rounded
              "
            >
              Detalles
            </button>
        </tr>
      </tbody>
    </table>
  </center>
   <center>
    <h1 class="text-3xl font-bold underline py-4">LISTA DE TEMAS</h1>
    <table class="table-auto">
      <thead>
        <tr>
          <th class="px-4 py-2">TEMA</th>
          <th class="px-4 py-2">NOTA</th>
          <th class="px-4 py-2">INTENTOS</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="tema in temasAll" :key="tema.id" class="bg-gray-100">
            <td class="border px-4 py-2">{{ tema.nombre_tema }}</td>
            <td class="border px-4 py-2"> {{ tema.nota }}</td>
            <td class="border px-4 py-2"> {{ tema.intentos }}</td>
        </tr>
      </tbody>
    </table>
  </center>
 </div>
</template>

<script>
export default {
  name: "Home",
  data() {
    return {
      alumnosAll: [],
      cursosAll: [],
      temasAll: [],
    };
  },
  mounted() {
    this.listarAlumnos();
  },
  methods: {
      async listarAlumnos() {
      await this.axios
        .get("/api/alumnos/all")
          .then((response) => {
          this.alumnosAll = response.data.data;
        })
        .catch((error) => {
          this.alumnosAll = [];
        });
      },
      async listarCursos(id, perfil) {
      await this.axios
        .get("/api/alumnos/cursos/"+id+"/"+perfil)
          .then((response) => {
              this.cursosAll = response.data.data;
              this.temasAll = [];
        })
        .catch((error) => {
          this.cursosAll = [];
          this.temasAll = [];
        });
      },
      async listarTemas(id, curso) {

      await this.axios
        .get("/api/alumnos/temas/"+id+"/"+curso)
          .then((response) => {
          this.temasAll = response.data.data;
        })
        .catch((error) => {
          this.temasAll = [];
        });
      },
  },
};
</script>

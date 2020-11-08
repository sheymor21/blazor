using Microsoft.EntityFrameworkCore.Migrations;

namespace tarea9.Migrations
{
    public partial class InitialCreate : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.CreateTable(
                name: "integrantes",
                columns: table => new
                {
                    integranteId = table.Column<int>(nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    Nombre = table.Column<string>(nullable: true),
                    Apellido = table.Column<string>(nullable: true),
                    Sexo = table.Column<string>(nullable: true),
                    Fecha_nacimiento = table.Column<string>(nullable: true),
                    Pais_nacimiento = table.Column<string>(nullable: true),
                    Ciudad_nacimiento = table.Column<string>(nullable: true),
                    Pais_residencia = table.Column<string>(nullable: true),
                    Ciudad_residencia = table.Column<string>(nullable: true),
                    Direccion = table.Column<string>(nullable: true),
                    Telefono = table.Column<long>(nullable: false),
                    Celular = table.Column<long>(nullable: false),
                    Correo = table.Column<string>(nullable: true),
                    Tipo_documento = table.Column<string>(nullable: true),
                    Documento = table.Column<string>(nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_integrantes", x => x.integranteId);
                });

            migrationBuilder.CreateTable(
                name: "Users",
                columns: table => new
                {
                    UserId = table.Column<int>(nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    UserName = table.Column<string>(nullable: true),
                    foto = table.Column<string>(nullable: true),
                    password = table.Column<string>(nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Users", x => x.UserId);
                });

            migrationBuilder.CreateTable(
                name: "Datos_Academicos",
                columns: table => new
                {
                    Datos_academicosId = table.Column<int>(nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    Nivel = table.Column<string>(nullable: true),
                    Suspendido = table.Column<string>(nullable: true),
                    integranteId = table.Column<int>(nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Datos_Academicos", x => x.Datos_academicosId);
                    table.ForeignKey(
                        name: "FK_Datos_Academicos_integrantes_integranteId",
                        column: x => x.integranteId,
                        principalTable: "integrantes",
                        principalColumn: "integranteId",
                        onDelete: ReferentialAction.Cascade);
                });

            migrationBuilder.CreateTable(
                name: "Datos_Eclesiasticos",
                columns: table => new
                {
                    Datos_eclesiasticosId = table.Column<int>(nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    Fecha_conversion = table.Column<string>(nullable: true),
                    Fecha_bautismo = table.Column<string>(nullable: true),
                    Fecha_aceptacion = table.Column<string>(nullable: true),
                    Denominacion_religiosa = table.Column<string>(nullable: true),
                    Nombre_iglesiaA = table.Column<string>(nullable: true),
                    Iglesia_anterior = table.Column<string>(nullable: true),
                    Nombre_pastorA = table.Column<string>(nullable: true),
                    Diciplinado = table.Column<string>(nullable: true),
                    Funcion_religiosa = table.Column<string>(nullable: true),
                    Ministerio_fruto = table.Column<string>(nullable: true),
                    Ministerios_servidos = table.Column<string>(nullable: true),
                    Ministerio_llamado = table.Column<string>(nullable: true),
                    Metas = table.Column<string>(nullable: true),
                    Respaldo_estudios = table.Column<string>(nullable: true),
                    integranteId = table.Column<int>(nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Datos_Eclesiasticos", x => x.Datos_eclesiasticosId);
                    table.ForeignKey(
                        name: "FK_Datos_Eclesiasticos_integrantes_integranteId",
                        column: x => x.integranteId,
                        principalTable: "integrantes",
                        principalColumn: "integranteId",
                        onDelete: ReferentialAction.Cascade);
                });

            migrationBuilder.CreateTable(
                name: "Datos_Familiares",
                columns: table => new
                {
                    Datos_familiaresId = table.Column<int>(nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    Estado = table.Column<string>(nullable: true),
                    Pareja = table.Column<string>(nullable: true),
                    Hijos = table.Column<string>(nullable: true),
                    N_hijos = table.Column<int>(nullable: false),
                    integranteId = table.Column<int>(nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Datos_Familiares", x => x.Datos_familiaresId);
                    table.ForeignKey(
                        name: "FK_Datos_Familiares_integrantes_integranteId",
                        column: x => x.integranteId,
                        principalTable: "integrantes",
                        principalColumn: "integranteId",
                        onDelete: ReferentialAction.Cascade);
                });

            migrationBuilder.CreateTable(
                name: "Datos_Laborales",
                columns: table => new
                {
                    Datos_laboralesId = table.Column<int>(nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    Profesion = table.Column<string>(nullable: true),
                    Empresa_nombre = table.Column<string>(nullable: true),
                    Ocupacion_actual = table.Column<string>(nullable: true),
                    Telefono = table.Column<long>(nullable: false),
                    integranteId = table.Column<int>(nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Datos_Laborales", x => x.Datos_laboralesId);
                    table.ForeignKey(
                        name: "FK_Datos_Laborales_integrantes_integranteId",
                        column: x => x.integranteId,
                        principalTable: "integrantes",
                        principalColumn: "integranteId",
                        onDelete: ReferentialAction.Cascade);
                });

            migrationBuilder.CreateTable(
                name: "Datos_Academicos_Razons",
                columns: table => new
                {
                    Datos_academicos_razonid = table.Column<int>(nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    Razon = table.Column<string>(nullable: true),
                    Datos_academicosId = table.Column<int>(nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Datos_Academicos_Razons", x => x.Datos_academicos_razonid);
                    table.ForeignKey(
                        name: "FK_Datos_Academicos_Razons_Datos_Academicos_Datos_academicosId",
                        column: x => x.Datos_academicosId,
                        principalTable: "Datos_Academicos",
                        principalColumn: "Datos_academicosId",
                        onDelete: ReferentialAction.Cascade);
                });

            migrationBuilder.CreateTable(
                name: "Datos_Eclesiasticos_Disciplinas",
                columns: table => new
                {
                    Datos_eclesiasticos_disciplinaId = table.Column<int>(nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    cantidad = table.Column<int>(nullable: false),
                    causa = table.Column<string>(nullable: true),
                    Datos_eclesiasticosId = table.Column<int>(nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Datos_Eclesiasticos_Disciplinas", x => x.Datos_eclesiasticos_disciplinaId);
                    table.ForeignKey(
                        name: "FK_Datos_Eclesiasticos_Disciplinas_Datos_Eclesiasticos_Datos_eclesiasticosId",
                        column: x => x.Datos_eclesiasticosId,
                        principalTable: "Datos_Eclesiasticos",
                        principalColumn: "Datos_eclesiasticosId",
                        onDelete: ReferentialAction.Cascade);
                });

            migrationBuilder.CreateIndex(
                name: "IX_Datos_Academicos_integranteId",
                table: "Datos_Academicos",
                column: "integranteId");

            migrationBuilder.CreateIndex(
                name: "IX_Datos_Academicos_Razons_Datos_academicosId",
                table: "Datos_Academicos_Razons",
                column: "Datos_academicosId");

            migrationBuilder.CreateIndex(
                name: "IX_Datos_Eclesiasticos_integranteId",
                table: "Datos_Eclesiasticos",
                column: "integranteId");

            migrationBuilder.CreateIndex(
                name: "IX_Datos_Eclesiasticos_Disciplinas_Datos_eclesiasticosId",
                table: "Datos_Eclesiasticos_Disciplinas",
                column: "Datos_eclesiasticosId");

            migrationBuilder.CreateIndex(
                name: "IX_Datos_Familiares_integranteId",
                table: "Datos_Familiares",
                column: "integranteId");

            migrationBuilder.CreateIndex(
                name: "IX_Datos_Laborales_integranteId",
                table: "Datos_Laborales",
                column: "integranteId");
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropTable(
                name: "Datos_Academicos_Razons");

            migrationBuilder.DropTable(
                name: "Datos_Eclesiasticos_Disciplinas");

            migrationBuilder.DropTable(
                name: "Datos_Familiares");

            migrationBuilder.DropTable(
                name: "Datos_Laborales");

            migrationBuilder.DropTable(
                name: "Users");

            migrationBuilder.DropTable(
                name: "Datos_Academicos");

            migrationBuilder.DropTable(
                name: "Datos_Eclesiasticos");

            migrationBuilder.DropTable(
                name: "integrantes");
        }
    }
}

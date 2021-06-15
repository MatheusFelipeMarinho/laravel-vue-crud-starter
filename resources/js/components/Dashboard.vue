<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body p-0">
              <div class="row">
                <div
                  class="
                    col-4
                    d-flex
                    align-items-center
                    flex-column
                    justify-content-between
                    p-4
                  "
                >
                  <div class="mb-4">
                    <span class="fa-stack fa-3x">
                      <i
                        class="fas fa-circle fa-stack-2x"
                        style="color: #d8efea"
                      ></i>
                      <img
                        class="img-fluid ml-4"
                        widht="30"
                        src="/images/money.png"
                        alt="The Logo"
                        style="opacity: 0.8"
                      />
                    </span>
                  </div>
                  <div>
                    <h5 class="font-weight-bold" style="color: #324e6f">
                      R$ 0,00
                    </h5>
                  </div>
                  <div class="mb-4">
                    <small style="color: #324e6f">
                      Total recuperado no período
                    </small>
                  </div>
                  <div>
                    <h5 class="font-weight-bold" style="color: #324e6f mb-0">
                      R$ 0,00
                    </h5>
                  </div>
                  <div class="mb-2">
                    <small style="color: #324e6f">
                      Total de pagamentos do periodo</small
                    >
                  </div>
                </div>
                <div
                  class="
                    col-md-8
                    d-flex
                    align-items-center
                    flex-column
                    justify-content-between
                    p-4
                  "
                >
                  <div class="mb-2">skadlkl</div>
                  <VueApexCharts
                    width="530"
                    height="200"
                    type="line"
                    :options="options"
                    :series="series"
                  ></VueApexCharts>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body p-0">
              <div class="row">
                <div
                  class="
                    col-4
                    d-flex
                    align-items-center
                    flex-column
                    justify-content-between
                    p-4
                  "
                >
                  <div class="mb-4">
                    <span class="fa-stack fa-3x">
                      <i
                        class="fas fa-circle fa-stack-2x"
                        style="color: #d6dce2"
                      ></i>
                      <img
                        src="/images/agreement.svg"
                        alt="The Logo"
                        style="opacity: 0.8"
                      />
                    </span>
                  </div>
                  <div>
                    <h5 class="font-weight-bold" style="color: #324e6f">
                      R$ 0,00
                    </h5>
                  </div>
                  <div class="mb-4">
                    <small style="color: #324e6f">
                      Acordos a receber, em andamento
                    </small>
                  </div>
                </div>
                <div
                  class="
                    col-md-8
                    d-flex
                    align-items-center
                    flex-column
                    justify-content-between
                    p-4
                  "
                >
                  <div>
                    <div class="mb-3" style="color: #f6f6f6">
                      <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <!-- Info Boxes Style 2 -->
          <div class="pb-2">
            <h4 class="font-weight-bold" style="color: #324e6f">Dívidas</h4>
          </div>
          <div class="info-box mb-3">
            <span class="info-box-icon mr-0"><span class="dot"></span></span>

            <div
              class="d-flex flex-row align-items-center justify-content-around"
            >
              <div class="pr-5 mr-5">
                <span class="text-left font-weight-bold" style="color: #324e6f"
                  >Pendentes</span
                >
              </div>
              <div class="text-right pl-5 ml-5">
                <span class="text-left font-weight-bold" style="color: #324e6f"
                  >2 dividas</span
                >
              </div>
            </div>
          </div>

          <div class="pt-4 pb-2">
            <h4 class="font-weight-bold" style="color: #324e6f">
              Transferências
            </h4>
          </div>
          <!-- /.info-box -->
          <div class="card">
            <div class="card-body">
              <div
                class="
                  d-flex
                  align-items-center
                  flex-column
                  justify-content-between
                  p-4
                "
              >
                <div class="mb-4">
                  <img
                    src="/images/send.svg"
                    alt="The Logo"
                    style="opacity: 0.8"
                  />
                </div>
                <div>
                  <h4 class="font-weight-bold" style="color: #324e6f">
                    Você ainda não solicitou!
                  </h4>
                </div>
                <div>
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-toggle="button"
                    aria-pressed="false"
                    autocomplete="off"
                  >
                    Agendar transferência
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>
      <!-- /.col -->
    </div>
  </section>
</template>

<script>
import VueApexCharts from "vue-apexcharts";

export default {
  components: { VueApexCharts },

  data() {
    return {
      options: {
        chart: {
          id: "vuechart-example",
          zoom: {
            enabled: false,
          },
        },
        markers: {
          size: [5],
        },
        grid: {
          row: {
            colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
            opacity: 0.5,
          },
        },
        xaxis: {
          categories: [
            "jan",
            "fev",
            "mar",
            "abr",
            "mai",
            "jun",
            "jul",
            "ago",
            "set",
            "out",
            "nov",
            "dez",
          ],
        },
      },
      series: [
        {
          name: "series-1",
          data: [5, 40, 45, 49, 30, 45, 50, 35, 40, 45, 50, 49],
        },
      ],
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
<style scoped>
.dot {
  height: 12px;
  width: 12px;
  background-color: #324e6f;
  border-radius: 50%;
  display: inline-block;
}
.btn-primary {
  margin-top: 12px;
  font-size: 16px;
  color: #fff;
  line-height: 25px;
  border: none;
  border-radius: 40px;
  background: #324e6f;
  transition: all 0.3s ease 0s;
}
</style>
